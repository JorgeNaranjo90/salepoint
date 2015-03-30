<?php
use App\Http\Controllers\Pdf;


$pdf = new pdf();
$pdf->load();
$dompdf = new DOMPDF();

$html =
    '<html><body>'.
    '<h2>Mario Muñoz </h2>'.
    '<p> Primer tutorial de composer con laravel 5</p>'.
    '</body></html>';

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("report.pdf");