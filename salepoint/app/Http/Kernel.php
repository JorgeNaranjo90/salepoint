<?php namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
		'App\Http\Middleware\VerifyCsrfToken',
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		'auth' => 'App\Http\Middleware\Authenticate',
		'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest' => 'App\Http\Middleware\RedirectIfAuthenticated',
        /*Middlewares of types users registred on the database salepoint*/
        'is_admin' => 'App\Http\Middleware\IsAdmin',
        'is_user' => 'App\Http\Middleware\IsUser',
        'is_sale' => 'App\Http\Middleware\IsSale',
        'is_purchase' => 'App\Http\Middleware\IsPurchase',
        'is_report' => 'App\Http\Middleware\IsReport',
        /*Middlewares of lenguages*/
        'localize' => 'Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes',
        'localizationRedirect' => 'Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter',
        'localeSessionRedirect' => 'Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect'
	];

}
