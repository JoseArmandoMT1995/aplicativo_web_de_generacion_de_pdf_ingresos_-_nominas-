<!--pagina numero Final-->
<?php  
	function comprimir($archivos_xml,$nombre){
		$nombre_rar=$nombre;
		$x=count($archivos_xml);
		$zip = new ZipArchive();
		//Nombre del archivo ZIP que se creara
		$archivo = "rar/$nombre_rar.zip";
		
		echo "<center><h4>Archivos PDF:</h4></center>";
		echo "<center>";
		echo '<div class="ex3">';
		if($zip->open($archivo,ZIPARCHIVE::CREATE)==true){

		  for ($i=0; $i < $x; $i++) { 
			//echo "hola $i $archivos_xml[$i]<br>";
			$num=$i+1;
			echo "<br><b>$num:</b> ".nombre_base($archivos_xml[$i]).".pdf";
			$zip->addfile("archivos/".$nombre_rar."/".nombre_base($archivos_xml[$i]).".pdf");
			//$za->addFromString($archivos_xml[$i],'yes');
		  }
		echo "</div>";

		echo "<p><b>Se han genetrado $num archivos PDF.</b></p>";
		echo "</center>";
		  $zip->close();
		  //echo "Se ha creado el archivo ".$archivo;
		  return ($nombre_rar);
		}else{
		  echo "Se ha presentado un error al crear el archivo ".$archivo;
		}
	}
?>