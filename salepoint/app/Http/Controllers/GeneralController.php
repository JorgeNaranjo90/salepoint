<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class GeneralController extends Controller {

	//
    public function setLangEn(){
        \App::setLocale('en');
        return view('/auth/login');
    }

    public function setLangEs(){
        \App::setLocale('es');
        return view('/auth/login');
    }

    public function sales(){
        return view('sales.index');
    }

    public function purchases(){
        return view('purchases.index');
    }

    public function settings(){
        return view('settings.index');
    }

    public function reports(){
        return view('reports.index');
    }

}
