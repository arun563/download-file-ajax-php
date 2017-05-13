<?php
ob_start();
$file = isset($_GET['file'])? $_GET['file']: ''; 
if($file){ 
	$path_parts = pathinfo($file);
	header("Content-Type: application/force-download");
    header("Content-type: application/pdf");
    header('Content-Description: File Download');
    header('Content-Disposition: attachment; filename=' . $path_parts["basename"]);
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-length: ' . filesize($file));
	ob_clean();
	flush();
	readfile($file);
}
?>