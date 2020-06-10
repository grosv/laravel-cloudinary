<?php


namespace Grosv\LaravelCloudinary;


use Cloudinary\Uploader;

class Client
{
    public function upload(string $file, array $options = [], $preset = 'ml_default')
    {
        return (new Upload(new Uploader()))
            ->setFile($file)
            ->setOptions($options)
            ->setPreset($preset)
            ->upload();
    }

    public function url(string $source, array $transformation)
    {
        return cloudinary_url($source, $transformation);
    }
}