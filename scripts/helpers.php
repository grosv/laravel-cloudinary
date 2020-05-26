<?php

use Illuminate\Support\Str;

if (!function_exists('cloudinary')) {
    function cloudinary($source, $transformation, $args = [])
    {
        if ($transformation === 'hero' && !Str::contains($source, '.hei')) {
            $transformation = 'hero_raw';
        }
        $transform = (new \Grosv\LaravelCloudinary\Transform())->$transformation();
        return (new \Grosv\LaravelCloudinary\Client)->url($source, $transform);
    }
}