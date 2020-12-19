<?php

use Illuminate\Support\Collection;

if (!function_exists('get_dir_files_list')) {
    /**
     * Get files list from directory
     *
     * @param string $scan_dir
     * @param (array|string) $only
     * @param boolean $full // return full path with file name
     * @return Collection
     */
    function get_dir_files_list(string $scan_dir, $only = null, $full = true)
    {
        $scanned = collect(scandir($scan_dir));
        $scanned->forget([0, 1]); // remove . & ..
        $files = collect();

        foreach ($scanned as $file) {
            $files->add(
                is_dir($scan_dir . "/${file}")
                    ? get_dir_files_list("${scan_dir}/${file}", $only, $full)
                    : ($full ? $scan_dir . "/${file}" : $file)
            );
        }

        if (isset($only)) $files = filter_files_by_extension($files, $only);

        return $files;
    }
}

if (!function_exists('filter_files_by_extension')) {

    /**
     * Filter files by extension(s)
     *
     * @param Collection $files
     * @param (string|array) $only
     * @return array
     */
    function filter_files_by_extension(Collection $files, $only)
    {
        if (!is_array($only)) $only = [$only];

        $files->filter(function ($file) use ($only) {
            return in_array(pathinfo($file, PATHINFO_EXTENSION), $only);
        });

        return $files;
    }
}
