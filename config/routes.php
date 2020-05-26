<?php

use Grosv\LaravelCloudinary\HandleNotification;
use Illuminate\Support\Facades\Route;

Route::any('/cloudinary_notify', HandleNotification::class)->name('cloudinary_notify');