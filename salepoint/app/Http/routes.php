<?php
use App\Http\Requests;
Use App\Product;
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
Route::group(['prefix'=>'settings', 'namespace'=>'Settings\Users', 'middleware' => ['auth','is_admin']], function(){
    Route::resource('users', 'UsersController');
});
Route::group(['namespace'=>'Partners', 'middleware' => ['auth','is_admin','is_user','is_sale','is_purchase']], function(){
    Route::pattern('partners', '[0-9]+');
    Route::get('partners/customer',['as' => 'partners.customer','uses' => 'PartnersController@customer']);
    Route::get('partners/supplier', ['as' => 'partners.supplier', 'uses' => 'PartnersController@supplier']);
    Route::get('partners/delete', ['as' => 'partners.onlyTrashed', 'uses' => 'PartnersController@delete']);
    Route::get('partners/report',['as' => 'partners.reports','middleware' => ['auth','is_report','is_admin'],'uses' => 'PartnersController@report']);
    Route::get('partners/reportCustomer', ['as' => 'partners.reports','middleware' => ['auth','is_admin'],'uses' => 'PartnersController@reportCustomer']);
    Route::get('partners/reportSupplier', ['as' => 'partners.reports','uses' => 'PartnersController@reportSupplier']);
    Route::resource('partners', 'PartnersController');
});
Route::group(['prefix'=>'settings','namespace'=>'Settings\Companys', 'middleware'=>['auth','is_admin']],function(){
    Route::resource('company','CompanysController');
});
Route::group(['prefix'=>'settings','namespace'=>'Settings\Countrys', 'middleware'=>['auth','is_admin']],function(){
    Route::resource('country','CountrysController');
});
Route::group(['prefix'=>'settings','namespace'=>'Settings\States', 'middleware'=>['auth','is_admin']],function(){
    Route::resource('state','StatesController');
});
Route::group(['prefix'=>'settings','namespace'=>'Settings\Citys', 'middleware'=>['auth','is_admin']],function(){
    Route::resource('city','CitysController');
});
Route::group(['prefix'=>'settings','namespace'=>'Settings\Currencys','middleware'=>['auth','is_admin']],function(){
    Route::resource('currency','CurrencysController');
});
Route::group(['prefix'=>'settings','namespace'=>'Settings\FiscalRegimens','middleware'=>['auth','is_admin']],function(){
    Route::resource('fiscalRegimen','FiscalRegimensController');
});
Route::group(['prefix'=>'settings', 'namespace'=>'Settings\Uoms', 'middleware' => ['auth','is_admin']], function(){
    Route::resource('uoms', 'UomsController');
});

Route::resource('paymentMethods', 'PaymentMethods\PaymentMethodsController', ['middleware' => 'auth','is_user','is_admin']);
Route::resource('paramPacs', 'ParamPacs\ParamPacsController', ['middleware' => ['auth','is_user','is_admin']]);
Route::resource('partners', 'Partners\PartnersController', ['middleware' => ['auth','is_user','is_admin']]);
Route::resource('taxs', 'Taxs\TaxsController',['middleware' => ['auth','is_user','is_admin']]);

Route::group(['prefix'=>'settings', 'namespace'=>'Settings\Certificatesats', 'middleware' => ['auth','is_admin']], function(){
    Route::resource('certificatesats', 'CertificatesatsController');
});

Route::group(['namespace'=>'Products','middleware' => ['auth','is_admin','is_user','is_sale']], function() {
    Route::pattern('products', '[0-9]+');
    Route::get('products/searchCode/{ean13}', ['as' => 'products.searchCode', function($ean13){
        if(Request::ajax()){
            $producto = Product::join('uoms','products.uom_id','=','uoms.id')
                ->where('ean13',$ean13)
                ->select('products.*','uoms.name as umo_name')
                ->get();
            return $producto->toJson();
        }
    }]);
    Route::get('products/report', 'ProductsController@report');
    Route::get('products/reportmax', 'ProductsController@reportmax');
    Route::get('products/reportmin', 'ProductsController@reportmin');
    Route::resource('products', 'ProductsController');
});

Route::group(['namespace'=>'SaleOrders', 'middleware' => ['auth','is_admin','is_user','is_sale']], function() {
    Route::pattern('sales', '[0-9]+');
    Route::resource('sales', 'SaleOrdersController');
});

Route::group(['namespace'=>'PurchaseOrders', 'middleware' => ['auth','is_admin','is_user','is_purchase']], function() {
    Route::pattern('purchases', '[0-9]+');
    Route::resource('purchases', 'PurchaseOrdersController');
});

Route::group(['namespace'=>'POS', 'middleware' => 'auth'], function() {
    Route::pattern('pos', '[0-9]+');
    Route::resource('pos', 'POSController');
});
//Menu Top Base
Route::get('settings', ['as' => 'settings', 'middleware' => ['auth','is_admin'], 'uses' => 'GeneralController@settings']);
Route::get('purchases', ['as' => 'purchases', 'middleware' => 'auth', 'uses' => 'GeneralController@purchases']);
Route::get('reports', ['as' => 'reports', 'middleware' => 'auth', 'uses' => 'GeneralController@reports']);
//Language
Route::get('languageEn', ['as' => 'languageen', 'uses' => 'GeneralController@setLangEn']);
Route::get('languageEs', ['as' => 'languagees', 'uses' => 'GeneralController@setLangEs']);



