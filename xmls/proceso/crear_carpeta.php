<?php  
function crear_carpeta($usuario){  
	
	$dir 	= "../usuario/".$usuario;
	$nomina	= $dir."/nomina";
	$factura= $dir."/factura";
	//nomina
	$nqr 	=	$nomina."/qr/";
	$nlogo	=	$nomina."/logo/";
	$nxml	=	$nomina."/xml/";
	//factura
	$fqr 	=	$factura."/qr/";
	$flogo	=	$factura."/logo/";
	$fxml	=	$factura."/xml/";
	/****************************/
		if (!file_exists($dir)){
		mkdir($dir);
		if (!file_exists($nomina) & !file_exists($factura)) {
			mkdir($nomina);
			mkdir($factura);
			
			if (!file_exists($nqr) & !file_exists($nlogo) & !file_exists($nxml)){
			mkdir($nqr);
    		mkdir($nlogo);
    		mkdir($nxml);
			}
			if (!file_exists($fqr) & !file_exists($flogo) & !file_exists($fxml)){
			mkdir($fqr);
    		mkdir($flogo);
    		mkdir($fxml);
			}
		}
	}
}
crear_carpeta($usuario);
?>