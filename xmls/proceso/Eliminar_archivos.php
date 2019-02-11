<?php

  function eliminar(){
    $dir = 'archivo';
    $file = array_diff(scandir($dir), array('..', '.'));
    //print_r($scanned_directory);

  foreach ($file as $key => $value) {
  //echo "<br>".$value;
  rmDir_rf($dir.'/'.$value);
  }
  }
	function rmDir_rf($carpeta)
    {
      foreach(glob($carpeta . "/*") as $archivos_carpeta){             
        if (is_dir($archivos_carpeta)){
          rmDir_rf($archivos_carpeta);
        } else {
        unlink($archivos_carpeta);
        }
      }
      rmdir($carpeta);
     }
?>