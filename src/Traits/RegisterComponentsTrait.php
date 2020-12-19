<?php

namespace Akhaled\HybridComponents\Traits;

use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Support\Facades\Blade;

/**
 * RegisterComponentsTrait
 */
trait RegisterComponentsTrait
{
    /**
     * Configure CMS Blade components.
     *
     * @return void
     */
    protected function bootComponentsUp()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {
            $this->registerComponentDirectory('button');
        });
    }

    /**
     * Register component directory files
     *
     * @param string $dir_name
     * @param string $alias the suffix will append before component blade, ex: offer-blade
     * @return void
     */
    private function registerComponentDirectory(string $dir_name, string $alias = null)
    {
        $actual_component_suffix = $this->getActualComponentSuffix($dir_name);
        $alias_component_alias = $this->getAliasComponentSuffix($alias ?? $dir_name);

        get_dir_files_list(self::HYBRID_COMPONENTS_DIR . '/' . $dir_name, 'php', false)
            ->each(function ($file_name) use ($actual_component_suffix, $alias_component_alias) {
                $component_name = str_replace('.blade', '', pathinfo($file_name, PATHINFO_FILENAME));
                $actual_component = implode('.', [$actual_component_suffix, $component_name]);
                $alias_component = implode('-', [$alias_component_alias, $component_name]);
                $this->registerComponent($actual_component, $alias_component);
            });
    }

    private function getActualComponentSuffix($path)
    {
        return 'hybrid-components::components.' . str_replace(['resources/views/', '/'], ['', '.'], $path);
    }

    private function getAliasComponentSuffix($alias)
    {
        return 'hybrid-' . str_replace(['resources/views/components/', '/'], ['', '-'], $alias);
    }

    private function registerComponent(string $actual, string $alias)
    {
        Blade::component($actual, $alias);
    }
}
