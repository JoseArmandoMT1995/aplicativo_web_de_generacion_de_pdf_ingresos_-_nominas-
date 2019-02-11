<?php

$zip = new ZipArchive();
//Nombre del archivo ZIP que se creara
$archivo = "prueba1.zip";

if($zip->open($archivo,ZIPARCHIVE::CREATE)==true){
  //Nombre y ruta del archivo que se agregara al zip
  //$zip->addfile("archivo1.txt");
  //Nombre y ruta del archivo que se agregara al zip
  //$zip->addfile("archivo2.txt");
  //Nombre y ruta del archivo que se agregara al zip
  $zip->addfile("archivos/N-000419.xml");
  $zip->addfile("archivos/N-000433.xml");
  $zip->close();
  echo "Se ha creado el archivo ".$archivo;
}else{
  echo "Se ha presentado un error al crear el archivo ".$archivo;
}

?>
