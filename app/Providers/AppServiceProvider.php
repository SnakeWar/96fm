<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        URL::forceScheme('https');
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);

        Validator::extend('base64_image',function($attribute, $value, $params, $validator) {
            try {
                $value = str_replace('data:image/png;base64,', '', $value);
                $value = str_replace('data:image/jpeg;base64,', '', $value);
                
                $image = base64_decode($value);
                $f = finfo_open();
                $result = finfo_buffer($f, $image, FILEINFO_MIME_TYPE);
                return $result == 'image/png' || $result == 'image/jpeg';
            } catch (\Exception $th) {
                return false;
            }
        });
    }
}
