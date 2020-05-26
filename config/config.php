<?php

return [
    'cloud_name' => env('CLOUDINARY_CLOUD'),
    'api_key' => env('CLOUDINARY_KEY'),
    'api_secret' => env('CLOUDINARY_SECRET'),
    'secure' => env('CLOUDINARY_SECURE', true)
];