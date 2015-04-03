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


Route::group(['prefix'=>'settings', 'namespace'=>'Settings\Users', 'middleware' => 'auth'], function(){
    Route::resource('users', 'UsersController');
});

Route::group(['namespace'=>'Partners', 'middleware' => 'auth'], function() {
    Route::pattern('partners', '[0-9]+');
    Route::get('partners/customer',['as' => 'partners.customer', 'uses' => 'PartnersController@customer']);
    Route::get('partners/supplier', ['as' => 'partners.supplier', 'uses' => 'PartnersController@supplier']);
    Route::get('partners/delete', ['as' => 'partners.onlyTrashed', 'uses' => 'PartnersController@delete']);
    Route::get('partners/report', ['as' => 'partners.reports', 'uses' => 'PartnersController@report']);
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

Route::resource('paymentMethods', 'PaymentMethods\PaymentMethodsController', ['middleware' => 'auth']);

Route::resource('paramPacs', 'ParamPacs\ParamPacsController', ['middleware' => 'auth']);


Route::resource('taxs', 'Taxs\TaxsController',['middleware' => 'auth']);


Route::group(['prefix'=>'settings', 'namespace'=>'Settings\Certificatesats', 'middleware' => 'auth'], function(){
    Route::pattern('settings/certificatesats', '[0-9]+');
    Route::get('settings/certificatesats/report', 'Settings\certificatesats@report');
    Route::resource('certificatesats', 'CertificatesatsController');

});
Route::group(['namespace'=>'Products','middleware' => 'auth'], function() {
    Route::pattern('products', '[0-9]+');
    Route::get('products/report', 'ProductsController@report');
    Route::resource('products', 'ProductsController');
});

Route::group(['namespace'=>'SaleOrders', 'middleware' => 'auth'], function() {
    Route::pattern('sales', '[0-9]+');
    Route::resource('sales', 'SaleOrdersController');
});

Route::group(['namespace'=>'PurchaseOrders', 'middleware' => 'auth'], function() {
    Route::pattern('purchases', '[0-9]+');
    Route::resource('purchases', 'PurchaseOrdersController');
});


//Menu Top Base
Route::get('/settings', ['middleware' => 'auth',function()
{
    return view('settings.index');
}]);

Route::get('/sales', ['middleware' => 'auth',function()
{
    return view('sales.index');
}]);

Route::get('/purchases', ['middleware' => 'auth',function()
{
    return view('purchases.index');
}]);


//Language
Route::get('languageEn', ['as' => 'languageen', 'uses' => 'GeneralController@setLangEn']);
Route::get('languageEs', ['as' => 'languagees', 'uses' => 'GeneralController@setLangEs']);


