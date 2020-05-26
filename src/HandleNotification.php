<?php


namespace Grosv\LaravelCloudinary;




use Illuminate\Http\Request;

class HandleNotification
{
    public function __invoke(Request $request)
    {
        return response()->noContent();
    }
}