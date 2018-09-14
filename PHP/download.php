<?php
$file = "Remus_Iftimie_CV.pdf";
// Quick check to verify that the file exists
if( !file_exists($file) ) die("File not found");

header('Content-disposition: attachment; filename=Remus_Iftimie_CV.pdf');
header("Content-Length: " . filesize($file));
header('Content-type: application/pdf');
// IE fix (for HTTPS only) header('Cache-Control: private');
header('Pragma: private');
ob_clean();
flush();
readfile('Remus_Iftimie_CV.pdf');
?>