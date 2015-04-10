<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;


class GeneralController extends Controller {

    public function setLangEn(){
       \App::setLocale('en');
        return view('/auth/login');
    }

    public function setLangEs(){
       \App::setLocale('es');
        return view('/auth/login');
    }

    public function lenguages()
    {
        if(Session::get('language')==''){
            \App::setLocale('en');
        }else{
            \App::setLocale(Session::get('language'));
        }

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
