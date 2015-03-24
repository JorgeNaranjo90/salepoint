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

Route::group(['prefix'=>'settings','namespace'=>'Settings\Companys'],function(){
    Route::resource('company','CompanysController');
});

Route::group(['prefix'=>'settings','namespace'=>'Settings\Currencys'],function(){
    Route::resource('currency','CurrencysController');
});

Route::group(['prefix'=>'settings','namespace'=>'Settings\FiscalRegimens'],function(){
    Route::resource('fiscalRegimen','FiscalRegimensController');
});
Route::get('partners', ['as' => 'partner.index', 'uses' => 'Partners\PartnersController@index']);
Route::get('partners/create', ['as' => 'partner.create', 'uses' => 'Partners\PartnersController@create']);
Route::post('partners', ['as' => 'partner.store', 'uses' => 'Partners\PartnersController@store']);

//Language

Route::get('languageEn', ['as' => 'languageen', 'uses' => 'GeneralController@setLangEn']);
Route::get('languageEs', ['as' => 'languagees', 'uses' => 'GeneralController@setLangEs']);


