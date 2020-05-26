<?php

if (!function_exists('cloudinary')) {
    function cloudinary($source, $transformation, $args = [])
    {
        $transform = (new \Grosv\LaravelCloudinary\Transform())->$transformation();
        return (new \Grosv\LaravelCloudinary\Client)->url($source, $transform);
    }
}