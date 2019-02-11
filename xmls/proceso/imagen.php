<?php
header('Content-type: ../imagenes');

$imagen = new Imagick('regresar.png');
$image->adaptiveResizeImage(10,10);

echo $imagen;
?>