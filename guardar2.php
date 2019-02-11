<?php  
	//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
	$array = array();
	foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
		if(
			$_FILES["archivo"]["name"][$key] && 
			$_FILES["archivo"]["type"][$key]=="text/xml") {
			$array[]=$_FILES["archivo"]["name"][$key];
			
				$filename = $_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo
				$nombre_temporal = $_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
				$directorio = 'carpeta_archivo/'; //Declaramos un  variable con la ruta donde guardaremos los archivos

				//Validamos si la ruta de destino existe, en caso de no existir la creamos
				if(!file_exists($directorio)){
					mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
				}
				
				$directorio_destino=opendir($directorio); //Abrimos el directorio de destino
				$ruta_destino_archivo = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
				//Movemos y validamos que el archivo se haya cargado correctamente
				//El primer campo es el origen y el segundo el destino
				if(move_uploaded_file($nombre_temporal, $ruta_destino_archivo)){	
					echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
					} else {	
					echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
				}
				closedir($directorio_destino); //Cerramos el directorio de destino
		}
		else{
			echo "<p style='color:red;'> archivo invalido <br><b>Nombre del archivo: </b> "
			.$filename = $_FILES["archivo"]["name"][$key]."<p>";

			if ($_FILES["archivo"]["type"][$key]!="text/xml") {
				echo "<b style='color:red;'> El archivo no es el indicado.</b><br>";
			}
			if ($_FILES["archivo"]["type"][$key]=="text/xml") {
				$xmlCFDI="carpeta_archivo/".$_FILES["archivo"]["name"][$key];
				$xml = simplexml_load_file($xmlCFDI);
				$namespaces = $xml->getDocNamespaces();
		
				if (!isset($namespaces["cfdi"]) )
		   			{echo "<b style='color:red;'>Este archivo ($archivoXML) NO es un documento CFDI.</b><br>";
		    		return;}
		     	if (!isset($namespaces["nomina12"]) )
		   			{echo "<b style='color:red;'>Este archivo ($archivoXML) NO es un documento CFDI.</b><br>";
		    		return;}
				if($namespaces["cfdi"]!="http://www.sat.gob.mx/cfd/3" )
					{echo "<b style='color:red;'>No es un documento CFDI.</b><br>";
					return;}
			}
		}

	}
	var_dump($array);
?>