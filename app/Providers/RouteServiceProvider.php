<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\RateLimiter;
use App\Http\Requests\Request;
use Illuminate\Cache\RateLimiting\Limit;
=======
use App\Http\Requests\Request;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
<<<<<<< HEAD
=======
        $this->configureRateLimiting();
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
<<<<<<< HEAD
        $this->mapUpdateRoutes();
=======
        $this->mapApiRoutes();
        $this->mapApiv2Routes();
        $this->mapApiv3Routes();
        $this->mapApiv4Routes();

        //$this->mapInstallRoutes();
        //$this->mapUpdateRoutes();

        $this->mapBetaAdminRoutes();
        $this->mapBetaVendorRoutes();
        $this->mapBetaWebRoutes();
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */

    protected function mapInstallRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/install.php'));
    }

    protected function mapUpdateRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/update.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/rest_api/v1/api.php'));
    }

    protected function mapApiv2Routes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/rest_api/v2/api.php'));
    }

    protected function mapApiv3Routes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/rest_api/v3/seller.php'));
    }

    protected function mapApiv4Routes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/rest_api/v4/api.php'));
    }

    /**
     * Define the "beta" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */

    protected function mapBetaAdminRoutes(): void
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin/routes.php'));
    }
    protected function mapBetaVendorRoutes(): void
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/vendor/routes.php'));
    }
    protected function mapBetaWebRoutes(): void
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web/routes.php'));
    }

    /**
     * Configure the rate limiters for the application.
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('global', function (Request $request) {
            return Limit::perMinute(3000);
        });
    }
}
