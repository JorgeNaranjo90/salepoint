<?php
/**
 * Created by PhpStorm.
 * User: Mario
 * Date: 29/03/15
 * Time: 21:22
 */

namespace App\Http\Controllers;


class PdfLibrary {

    public function load()
    {
        require '../vendor/autoload.php';
        define('DOMPDF_ENABLE_AUTOLOAD', false);
        require_once '../vendor/dompdf/dompdf/dompdf_config.inc.php';
    }
}