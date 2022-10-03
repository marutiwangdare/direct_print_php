<?php 
require 'vendor/autoload.php';

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream();

$file_to_save = 'file.pdf'; //file name to save file with
file_put_contents($file_to_save, $dompdf->output()); 

$cmd = 'wmic printer where "default=True" get name /value';

$printerName=utf8_encode(shell_exec($cmd));
//var_dump($printerName);
$printerName=trim(str_replace("Name=", '',$printerName));


$file=$file_to_save;



//PDFtoPrinter filename.pdf "Name of Printer"
$cmd = "PDFtoPrinter.exe " . $file . " \"" . $printerName . "\"";
echo $cmd;
echo utf8_encode(shell_exec($cmd));
?>