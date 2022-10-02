<?php

//$printerName = "VirtualPDF";
$printerName = "HP LaserJet M1005";
//$printerName = "Microsoft Print to PDF";
$file = "f.pdf";

//$file = "\"C:\wamp64\www\dev\printer\JT0601502090104.pdf\"";

//PDFtoPrinter filename.pdf "Name of Printer"
$cmd = "PDFtoPrinter.exe " . $file . " \"" . $printerName . "\"";
echo $cmd;
echo utf8_encode(shell_exec($cmd));

?>