<?php  
	$filename = "guardar_documentos.php"; 
// Definimos el nombre de archivo a descargar. 
//$filename = "100.xls"; 

// Ahora guardamos otra variable con la ruta del archivo 
$file = $filename; 

// Aquí, establecemos la cabecera del documento 
header("Content-Description: Descargar imagen"); 
header("Content-Disposition: attachment; filename=$filename");
header("Content-Type: application/force-download"); 
header("Content-Length: " . filesize($file)); 
header("Content-Transfer-Encoding: binary"); 

readfile($file); 
?>