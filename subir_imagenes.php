<?php  
	function subir_img($dirpdf){

		if(
			$_FILES["logo_propio"]["name"] && 
			$_FILES["logo_propio"]["type"]=="image/jpeg"){

				$filename = $_FILES["logo_propio"]["name"]; //Obtenemos el nombre original del archivo
				$nombre_temporal = $_FILES["logo_propio"]["tmp_name"]; //Obtenemos un nombre temporal del archivo
				$directorio =$dirpdf.'/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
				//Validamos si la ruta de destino existe, en caso de no existir la creamos
				if(!file_exists($directorio)){
					mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
				}
				$directorio_destino=opendir($directorio); //Abrimos el directorio de destino
				$ruta_destino_archivo = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
				//Movemos y validamos que el archivo se haya cargado correctamente
				//El primer campo es el origen y el segundo el destino
				if(move_uploaded_file($nombre_temporal, $ruta_destino_archivo)){	
					//echo " El archivo: <b style='color:green;'>' $filename '</b> <b>se ha almacenado en forma exitosa.</b><br>";
					return $ruta_destino_archivo;
					} else {	
					echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
				}
				closedir($directorio_destino); //Cerramos el directorio de destino
		}
		else
		{
			return $ruta_destino_archivo ='xmls/imagenes/blanco.png';
		}
	}
?>