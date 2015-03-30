<?php namespace App\Http\Controllers;



class Pdf {

    public function load()
    {
        require '../vendor/autoload.php';

        // disable DOMPDF's internal autoloader if you are using Composer
        define('DOMPDF_ENABLE_AUTOLOAD', false);

        // include DOMPDF's default configuration
        require_once '../vendor/dompdf/dompdf/dompdf_config.inc.php';
    }



}
