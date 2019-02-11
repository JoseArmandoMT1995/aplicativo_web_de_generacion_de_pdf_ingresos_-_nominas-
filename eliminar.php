<?php
function eliminar_directorio($directorio){
	$files = glob($directorio.'/*');
	foreach($files as $file){
	    if(is_file($file))
	    unlink($file); //elimino el fichero
	}
	if (is_array($files)) {
		rmdir($directorio);
		
	}else{
		echo "no hay";
	}
}

?>