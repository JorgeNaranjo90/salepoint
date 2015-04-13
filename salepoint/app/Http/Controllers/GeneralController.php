<?php namespace App\Http\Controllers;

use App\Http\Requests;

class GeneralController extends Controller {

    public function setLangEn(){
        \Config::set('app.locale', 'en');
        return view('/auth/login');
    }

    public function setLangEs(){
        \Config::set('app.locale', 'es');
        return view('/auth/login');
    }

    public function backup(){
        $host = \Config::get('database.connections.mysql.host');
        $database = \Config::get('database.connections.mysql.database');
        $username = \Config::get('database.connections.mysql.username');
        $password = \Config::get('database.connections.mysql.password');
        $backupPath = '/tmp/';
        $backupFileName = $database . "-" . date("Y-m-d-H-i-s") . '.sql';
        //for linux replace the path with /usr/local/bin/mysqldump (The path might varies).
        $path = "mysqldump";
        $command = $path . " -u" . $username . " -p" . $password . " " . $database . " > " . $backupPath . $backupFileName;
        //
        system($command);
        return "<a href='$backupPath . $backupFileName'></a>";
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
