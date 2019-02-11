<?php
function fecha(){
	date_default_timezone_set("America/Mexico_City");
	$hoy = getdate();
	//print_r($hoy);
	return $fecha= "$hoy[mday]_$hoy[mon]_$hoy[year]";
}

?>