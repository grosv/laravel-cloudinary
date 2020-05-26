<?php


namespace Grosv\LaravelCloudinary;


use Cloudinary;
use Illuminate\Support\ServiceProvider;

class LaravelCloudinaryProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../config/routes.php');

    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-cloudinary');

        Cloudinary::config([
            "cloud_name" => config('laravel-cloudinary.cloud_name'),
            "api_key" => config('laravel-cloudinary.api_key'),
            "api_secret" => config('laravel-cloudinary.api_secret'),
            "secure" => config('laravel-cloudinary.secure')
        ]);
    }
}