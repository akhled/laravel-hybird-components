<?php

namespace Akhaled\HybridComponents\Traits;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;

/**
 * RegisterComponentsTrait
 */
trait RegisterComponentsTrait
{
    protected function bootComponentsUp()
    {
        // $this->callAfterResolving(BladeCompiler::class, function () {
        $component_list = $this->scanComponentsDir();
        $this->registerComponentDirectory($component_list);
        // });
    }

    public function scanComponentsDir(string $scan_dir = self::HYBRID_COMPONENTS_DIR)
    {
        $scanned = collect(scandir($scan_dir));
        $scanned->forget([0, 1]); // remove . & ..
        $files = collect();

        foreach ($scanned as $file) {
            $file_path = implode('/', [$scan_dir, $file]);
            $files->add(
                is_dir($file_path) ? $this->scanComponentsDir($file_path) : $file_path
            );
        }

        if (isset($only)) $files = filter_files_by_extension($files, 'php');

        return $files;
    }

    /**
     * Register component directory files
     *
     * @param string $dir_name
     * @param string $alias the suffix will append before component blade, ex: offer-blade
     * @return void
     */
    private function registerComponentDirectory(Collection $components_dir): void
    {
        $components_dir->each(function ($component) {
            ($component instanceof Collection)
                ? $this->registerComponentDirectory($component)
                : $this->registerComponent($component);
        });
    }

    private function getActualComponentSuffix(string $path): string
    {
        return 'hybrid-components::components' . str_replace([self::HYBRID_COMPONENTS_DIR, '/'], ['', '.'], $path);
    }

    private function getAliasComponentSuffix(string $alias): string
    {
        return 'hybrid' . str_replace([self::HYBRID_COMPONENTS_DIR, '/'], ['', '-'], $alias);
    }

    private function registerComponent(string $component): void
    {
        $component = str_replace('.blade.php', '', $component);
        Blade::component($this->getActualComponentSuffix($component), $this->getAliasComponentSuffix($component));
    }
}