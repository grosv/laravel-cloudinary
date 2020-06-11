<?php


namespace Grosv\LaravelCloudinary;



class Transform
{
    public array $transformation;
    public array $transformations;
    private bool $isRaw = false;

    public function __construct()
    {
        $this->transformation = [];
        $this->transformations = [];
    }

    public function set($key, $value = null): self
    {
        if (is_string($key)) {
            $this->transformation[$key] = $value;
        }
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                $this->transformation[$k] = $v;
            }
        }
        return $this;

    }


    public function next(): self
    {
        if (empty($this->transformation)) {
            return $this;
        }
        array_push($this->transformations, $this->transformation);
        $this->transformation = [];
        return $this;
    }

    public function finish(): array
    {
        return $this->transformations;
    }


    // Special case - Just return raw file with no other transformations
    public function raw($args = []): array
    {
        return [];
    }

    // Common recipes
    public function thumbnail($args = []): array
    {
        return ['height' => 120, 'width' => 'auto', 'fetch_format' => 'jpg'];
    }

    public function square($args = []): array
    {
        return ['width' => 800, 'height' => '800', 'crop' => 'fill', 'gravity' => 'face:center'];
    }

    public function hero($args = [])
    {
        return ['width' => 800, 'fetch_format' => 'jpg'];
    }

    public function hero_raw($args = [])
    {
        return ['width' => 800];
    }

    public function responsive($args = []): array
    {
        return ['dpr' => 'auto', 'responsive' => true, 'width' => 'auto', 'crop' => 'scale'];
    }

    public function cropToFaces($args = []): array
    {
        return ['width' => $args['width'] ?? 250, 'height' => $args['height'] ?? 250, 'gravity' => 'faces', 'crop' => 'fill'];
    }

}