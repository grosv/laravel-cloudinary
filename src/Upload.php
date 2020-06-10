<?php


namespace Grosv\LaravelCloudinary;

use Cloudinary\Uploader;


class Upload
{
    private $client;
    public $file;
    public $options;
    public $uploadPreset;

    public function __construct(Uploader $cloudinary)
    {
        $this->client = $cloudinary;
        return $this;
    }

    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    public function setOptions(array $options = [])
    {
        $this->options = $options;
        return $this;
    }

    public function setPreset($preset)
    {
        $this->uploadPreset = $preset;
        return $this;
    }

    public function upload()
    {
        return $this->client::upload($this->file, $this->uploadPreset, $this->options);
        /**
        return $this->isLargeFile() ?
            $this->client::upload_large($this->file, $this->options) :
            $this->client::upload($this->file, $this->options);
         */

    }

    public function isLargeFile()
    {
        return filesize($this->file) >= 100 * pow(1024, 2);
    }

}