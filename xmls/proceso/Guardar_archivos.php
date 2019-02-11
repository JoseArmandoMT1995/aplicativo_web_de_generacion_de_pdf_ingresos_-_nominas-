<?php
function guardar_logo($usuario,$tipo_documento,$imagen,$imagen_tmp){
	if (!isset($imagen) || $imagen== ""){
	$ruta_logo="../imagenes/sin_logo.png";
	}else
	{
		$dir 	= "../usuario/".$usuario;
		$nomina	= $dir."/nomina";
		$factura= $dir."/factura";
		//nomina
		$nlogo	=	$nomina."/logo/";
		//factura
		$flogo	=	$factura."/logo/";
		if ($tipo_documento=="nomina"){
			$carpeta=$nlogo;
			opendir($carpeta);
			$destino=$carpeta.$imagen;
			copy($imagen_tmp, $destino);
			
			$ruta_logo=$destino;
		}
		if ($tipo_documento=="factura"){
			$carpeta=$flogo;
			opendir($carpeta);
			$destino=$carpeta.$imagen;
			copy($imagen_tmp, $destino);
			
			$ruta_logo=$destino;
		}
		$ruta_logo;
	}

$ruta_logo;
	return($ruta_logo);
}
function guardar_xml($usuario,$tipo_documento,$archivo,$archivo_tmp){
	$dir 	= "../usuario/".$usuario;
	$nomina	= $dir."/nomina";
	$factura= $dir."/factura";
	//nomina
	$nxml	=	$nomina."/xml/";
	//factura
	$fxml	=	$factura."/xml/";
		if ($tipo_documento=="nomina"){
		$carpeta=$nxml;
		opendir($carpeta);
		$destino=$carpeta.$archivo;
		copy($archivo_tmp, $destino);
		$ruta_xml=$destino;	
	}
	if ($tipo_documento=="factura"){
		$carpeta=$fxml;
		opendir($carpeta);
		$destino=$carpeta.$archivo;
		copy($archivo_tmp, $destino);
		$ruta_xml=$destino;
	}
	return($ruta_xml);

}
function guardar_qr(){
//null
}

$logo=guardar_logo($usuario,$tipo_documento,$imagen,$imagen_tmp);

$xml=guardar_xml($usuario,$tipo_documento,$archivoXML,$archivo_tmp);

?>