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


//$printerName = "VirtualPDF";
$printerName = "HP LaserJet M1005";
//$printerName = "Microsoft Print to PDF";
//$file = "pr.pdf";

$file=$file_to_save;

//$file = "\"C:\wamp64\www\dev\printer\JT0601502090104.pdf\"";

//PDFtoPrinter filename.pdf "Name of Printer"
$cmd = "PDFtoPrinter.exe " . $file . " \"" . $printerName . "\"";
echo $cmd;
echo utf8_encode(shell_exec($cmd));
?>