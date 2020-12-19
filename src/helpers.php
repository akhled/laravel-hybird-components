<?php

use Illuminate\Support\Collection;

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