<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('/settings', ['middleware' => 'auth',function()
{
    return view('settings.index');
}]);

Route::group(['prefix'=>'settings', 'namespace'=>'Settings\Users', 'middleware' => 'auth'], function(){
    Route::resource('users', 'UsersController');
});

Route::group(['namespace'=>'Partners', 'middleware' => 'auth'], function() {
    Route::pattern('partners', '[0-9]+');
    Route::get('partners/customer', 'PartnersController@customer');
    Route::get('partners/supplier', 'PartnersController@supplier');
    Route::resource('partners', 'PartnersController');
});


Route::group(['prefix'=>'settings','namespace'=>'Settings\Companys', 'middleware'=>'auth'],function(){
    Route::resource('company','CompanysController');
});

Route::group(['prefix'=>'settings','namespace'=>'Settings\Currencys','middleware'=>'auth'],function(){
    Route::resource('currency','CurrencysController');
});

Route::group(['prefix'=>'settings','namespace'=>'Settings\FiscalRegimens','middleware'=>'auth'],function(){
    Route::resource('fiscalRegimen','FiscalRegimensController');
});

Route::group(['prefix'=>'settings', 'namespace'=>'Settings\Uoms', 'middleware' => 'auth'], function(){
    Route::resource('uoms', 'UomsController');
});


Route::resource('partners', 'Partners\PartnersController', ['middleware' => 'auth']);
Route::resource('taxs', 'Taxs\TaxsController',['middleware' => 'auth']);


Route::group(['prefix'=>'settings', 'namespace'=>'Settings\Certificatesats', 'middleware' => 'auth'], function(){
    Route::resource('certificatesats', 'CertificatesatsController');

});

Route::group(['namespace'=>'Products','middleware' => 'auth'], function() {
    Route::resource('products', 'ProductsController');
});


//Language

Route::get('languageEn', ['as' => 'languageen', 'uses' => 'GeneralController@setLangEn']);
Route::get('languageEs', ['as' => 'languagees', 'uses' => 'GeneralController@setLangEs']);


