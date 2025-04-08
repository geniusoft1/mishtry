<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\App;
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< HEAD
        if (!App::runningInConsole()) {
            $theme = env('WEB_THEME') == null ? 'default' : env('WEB_THEME');
            $path = base_path('resources/themes/' . $theme);
            if (!defined('VIEW_FILE_NAMES')) {
                define("VIEW_FILE_NAMES", include($path . '/file_names.php'));
            }
            view()->addLocation($path);
        }
=======
        $theme = env('WEB_THEME') == null ? 'default' : env('WEB_THEME');
        $path = base_path('resources/themes/' . $theme);
        if (!defined('VIEW_FILE_NAMES')) {
            define("VIEW_FILE_NAMES", include($path . '/file_names.php'));
        }
        view()->addLocation($path);
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
