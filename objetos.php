<?php  
	function nuloString($variable){
	if (!isset($variable) || $variable=='' || $variable== null) 
		{
	    return $variable= "NULL";
		}

		else
		{
		return $variable;
		}

	}
	function nuloFloat($variable){
	if (!isset($variable) || $variable=='' || $variable== null) 
		{
		 $variable=0;
	     $variable= number_format(floatval($variable),2);
		}

		else
		{
		 $variable = number_format(floatval($variable),2);
		}
	return $variable;
	}
	function seleccionar_Descripcion_de_donde($Campo,$tabla,$Id,$dato){

	if (!isset($dato) || $dato=="NULL") {
		return $var="NULL";
	}else{
	$mysqli=new mysqli("localhost","root","","catalogos"); 
	//$mysqli=new mysqli("localhost","root","","civerwine_catalogos"); 
	//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos	
		if(mysqli_connect_errno()){
			echo 'Conexion Fallida : ', mysqli_connect_error();
			exit();
		}
		$sql = "SELECT $Campo FROM $tabla WHERE $Id='$dato'";
		$var="";
		//echo $sql;
	$result = $mysqli->query($sql);
		$Descripcion=$result->fetch_array(MYSQLI_ASSOC);
		//print_r($Descripcion);
		if (!$Descripcion)
			{ $var="Consulta: ".$sql."   Dato No encontrado"; }
		else
			foreach ($Descripcion as $dato ) {
		 		 	$var =$dato;  } 
		 	return $var;
	}

}
function php_lineal_descripcion($tabla,$dato){
	if ($tabla=="regimenfiscal") {
			if ($dato=="601") {
				return $descripcion="General de Ley Personas Morales";
			}
			if ($dato=="603") {
				return $descripcion="Personas Morales con Fines no Lucrativos";
			}
			if ($dato=="605") {
				return $descripcion="Sueldos y Salarios e Ingresos Asimilados a Salarios";
			}
			if ($dato=="606") {
				return $descripcion="Arrendamiento";
			}
			if ($dato=="608") {
				return $descripcion="Demás ingresos";
			}
			if ($dato=="609") {
				return $descripcion="Consolidación";
			}
			if ($dato=="610") {
				return $descripcion="Residentes en el Extranjero sin Establecimiento Permanente en México";
			}
			if ($dato=="611") {
				return $descripcion="Ingresos por Dividendos (socios y accionistas)";
			}
			if ($dato=="612") {
				return $descripcion="Personas Físicas con Actividades Empresariales y Profesionales";
			}
			if ($dato=="614") {
				return $descripcion="Ingresos por intereses";
			}
			if ($dato=="616") {
				return $descripcion="Sin obligaciones fiscales";
			}
			if ($dato=="620") {
			return $descripcion="Sociedades Cooperativas de Producción que optan por diferir sus ingresos";
			}
			if ($dato=="621") {
				return $descripcion="Incorporación Fiscal";
			}
			if ($dato=="622") {
				return $descripcion="Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras";
			}
			if ($dato=="623") {
				return $descripcion="Opcional para Grupos de Sociedades";
			}
			if ($dato=="624") {
				return $descripcion="Coordinados";
			}
			if ($dato=="628") {
				return $descripcion="Hidrocarburos";
			}
			if ($dato=="607") {
				return $descripcion="Régimen de Enajenación o Adquisición de Bienes";
			}
			if ($dato=="629") {
				return $descripcion="De los Regímenes Fiscales Preferentes y de las Empresas Multinacionales";
			}
			if ($dato=="630") {
				return $descripcion="Enajenación de acciones en bolsa de valores";
			}
			if ($dato=="615") {
				return $descripcion="Régimen de los ingresos por obtención de premios";
			}
	}
	elseif ($tabla=="usocfdi") {
			if ($dato=="G01") {
				return $descripcion="Adquisición de mercancias";
			}
			if ($dato=="G02") {
				return $descripcion="Devoluciones, descuentos o bonificaciones";
			}
			if ($dato=="G03") {
				return $descripcion="Gastos en general";
			}
			if ($dato=="I01") {
				return $descripcion="Construcciones";
			}
			if ($dato=="I02") {
				return $descripcion="Mobilario y equipo de oficina por inversiones";
			}
			if ($dato=="I03") {
				return $descripcion="Equipo de transporte";
			}
			if ($dato=="I04") {
				return $descripcion="Equipo de computo y accesorios";
			}
			if ($dato=="I05") {
				return $descripcion="Dados, troqueles, moldes, matrices y herramental";
			}
			if ($dato=="I06") {
				return $descripcion="Comunicaciones telefónicas";
			}
			if ($dato=="I07") {
				return $descripcion="Comunicaciones satelitales";
			}
			if ($dato=="I08") {
				return $descripcion="Otra maquinaria y equipo";
			}
			if ($dato=="D01") {
				return $descripcion="Honorarios médicos, dentales y gastos hospitalarios.";
			}
			if ($dato=="D02") {
				return $descripcion="Gastos médicos por incapacidad o discapacidad";
			}
			if ($dato=="D03") {
				return $descripcion="Gastos funerales.";
			}
			if ($dato=="D04") {
				return $descripcion="Donativos.";
			}
			if ($dato=="D05") {
				return $descripcion="Intereses reales efectivamente pagados por créditos hipotecarios.";
			}
			if ($dato=="D06") {
				return $descripcion="Aportaciones voluntarias al SAR.";
			}
			if ($dato=="D07") {
				return $descripcion="Primas por seguros de gastos médicos.";
			}
			if ($dato=="D08") {
				return $descripcion="Gastos de transportación escolar obligatoria.";
			}
			if ($dato=="D09") {
				return $descripcion="Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones.";
			}
			if ($dato=="D10") {
				return $descripcion="Pagos por servicios educativos";
			}
			if ($dato=="P01") {
				return $descripcion="Por definir";
			}
	}
	elseif ($tabla=="tipodecomprobante") {
			if ($dato=="I") {
				return $descripcion="Ingreso";
			}
			if ($dato=="E") {
				return $descripcion="Egreso";
			}
			if ($dato=="T") {
				return $descripcion="Traslado";
			}
			if ($dato=="N") {
				return $descripcion="Nómina";
			}
			if ($dato=="P") {
				return $descripcion="Pago";
			}
	}
	elseif ($tabla=="metodopago") {
			if ($dato=="PUE") {
				return $descripcion="Pago en una sola exhibición";
			}
			if ($dato=="PIP") {
				return $descripcion="Pago inicial y parcialidades";
			}
			if ($dato=="PPD") {
				return $descripcion="Pago en parcialidades o diferido";
			}
	}
	elseif ($tabla=="formapago") {
			if ($dato=="01") {
				return $descripcion="Efectivo";
			}
			if ($dato=="02") {
				return $descripcion="Cheque nominativo";
			}
			if ($dato=="03") {
				return $descripcion="Transferencia electrónica de fondos";
			}
			if ($dato=="04") {
				return $descripcion="Tarjeta de crédito";
			}
			if ($dato=="05") {
				return $descripcion="Monedero electrónico";
			}
			if ($dato=="06") {
				return $descripcion="Dinero electrónico";
			}
			if ($dato=="08") {
				return $descripcion="Vales de despensa";
			}
			if ($dato=="12") {
				return $descripcion="Dación en pago";
			}
			if ($dato=="13") {
				return $descripcion="Pago por subrogación";
			}
			if ($dato=="14") {
				return $descripcion="Pago por consignación";
			}
			if ($dato=="15") {
				return $descripcion="Condonación";
			}
			if ($dato=="17") {
				return $descripcion="Compensación";
			}
			if ($dato=="23") {
				return $descripcion="Novación";
			}
			if ($dato=="24") {
				return $descripcion="Confusión";
			}
			if ($dato=="25") {
				return $descripcion="Remisión de deuda";
			}
			if ($dato=="26") {
				return $descripcion="Prescripción o caducidad";
			}
			if ($dato=="27") {
				return $descripcion="A satisfacción del acreedor";
			}
			if ($dato=="28") {
				return $descripcion="Tarjeta de débito";
			}
			if ($dato=="29") {
				return $descripcion="Tarjeta de servicios";
			}
			if ($dato=="99") {
				return $descripcion="Por definir";
			}
	}
	elseif (!isset($tabla) || $tabla=='') {
		return $descripcion="NULL";
	}
	else{
		return $descripcion="NULL";	
	}
}
function decenas_elegidas($numero)
{
    return $numero;
    //$float  = floatval($numero);
    //$float=number_format($float,2);
}
function numtoletras($xcifra)
{  
    $xarray = array(0 => "Cero",
        1 => "UN", "DOS", "TRES", "CUATRO", "CINCO", "SEIS", "SIETE", "OCHO", "NUEVE",
        "DIEZ", "ONCE", "DOCE", "TRECE", "CATORCE", "QUINCE", "DIECISEIS", "DIECISIETE", "DIECIOCHO", "DIECINUEVE",
        "VEINTI", 30 => "TREINTA", 40 => "CUARENTA", 50 => "CINCUENTA", 60 => "SESENTA", 70 => "SETENTA", 80 => "OCHENTA", 90 => "NOVENTA",
        100 => "CIENTO", 200 => "DOSCIENTOS", 300 => "TRESCIENTOS", 400 => "CUATROCIENTOS", 500 => "QUINIENTOS", 600 => "SEISCIENTOS", 700 => "SETECIENTOS", 800 => "OCHOCIENTOS", 900 => "NOVECIENTOS"
    );
    
    $xcifra = trim($xcifra);
    
    $xlength = strlen($xcifra);
    
    $xpos_punto = strpos($xcifra, ".");
    
    $xaux_int = $xcifra;
    
    $xdecimales = "00";
    if (!($xpos_punto === false)) {
        if ($xpos_punto == 0) {
            $xcifra = "0" . $xcifra;
            $xpos_punto = strpos($xcifra, ".");
        }
        $xaux_int = substr($xcifra, 0, $xpos_punto); // obtengo el entero de la cifra a covertir
    
        $xdecimales = substr($xcifra . "00", $xpos_punto + 1, 2); // obtengo los valores decimales
       
    }

    $XAUX = str_pad($xaux_int, 18, " ", STR_PAD_LEFT); // ajusto la longitud de la cifra, para que sea divisible por centenas de miles (grupos de 6)
   
    $xcadena = "";
    for ($xz = 0; $xz < 3; $xz++) {
        $xaux = substr($XAUX, $xz * 6, 6);
        $xi = 0;
        $xlimite = 6; // inicializo el contador de centenas xi y establezco el límite a 6 dígitos en la parte entera
        $xexit = true; // bandera para controlar el ciclo del While
        while ($xexit) {
            if ($xi == $xlimite) { // si ya llegó al límite máximo de enteros
                break; // termina el ciclo
            }

            $x3digitos = ($xlimite - $xi) * -1; // comienzo con los tres primeros digitos de la cifra, comenzando por la izquierda
            $xaux = substr($xaux, $x3digitos, abs($x3digitos)); // obtengo la centena (los tres dígitos)
            for ($xy = 1; $xy < 4; $xy++) { // ciclo para revisar centenas, decenas y unidades, en ese orden
                switch ($xy) {
                    case 1: // checa las centenas
                        if (substr($xaux, 0, 3) < 100) { // si el grupo de tres dígitos es menor a una centena ( < 99) no hace nada y pasa a revisar las decenas
                            
                        } else {
                            $key = (int) substr($xaux, 0, 3);
                            if (TRUE === array_key_exists($key, $xarray)){  // busco si la centena es número redondo (100, 200, 300, 400, etc..)
                                $xseek = $xarray[$key];
                                $xsub = subfijo($xaux); // devuelve el subfijo correspondiente (Millón, Millones, Mil o nada)
                                if (substr($xaux, 0, 3) == 100)
                                    $xcadena = " " . $xcadena . " CIEN " . $xsub;
                                else
                                    $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
                                $xy = 3; // la centena fue redonda, entonces termino el ciclo del for y ya no reviso decenas ni unidades
                            }
                            else { // entra aquí si la centena no fue numero redondo (101, 253, 120, 980, etc.)
                                $key = (int) substr($xaux, 0, 1) * 100;
                                $xseek = $xarray[$key]; // toma el primer caracter de la centena y lo multiplica por cien y lo busca en el arreglo (para que busque 100,200,300, etc)
                                $xcadena = " " . $xcadena . " " . $xseek;
                            } // ENDIF ($xseek)
                        } // ENDIF (substr($xaux, 0, 3) < 100)
                        break;
                    case 2: // checa las decenas (con la misma lógica que las centenas)
                        if (substr($xaux, 1, 2) < 10) {
                            
                        } else {
                            $key = (int) substr($xaux, 1, 2);
                            if (TRUE === array_key_exists($key, $xarray)) {
                                $xseek = $xarray[$key];
                                $xsub = subfijo($xaux);
                                if (substr($xaux, 1, 2) == 20)
                                    $xcadena = " " . $xcadena . " VEINTE " . $xsub;
                                else
                                    $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
                                $xy = 3;
                            }
                            else {
                                $key = (int) substr($xaux, 1, 1) * 10;
                                $xseek = $xarray[$key];
                                if (20 == substr($xaux, 1, 1) * 10)
                                    $xcadena = " " . $xcadena . " " . $xseek;
                                else
                                    $xcadena = " " . $xcadena . " " . $xseek . " Y ";
                            } // ENDIF ($xseek)
                        } // ENDIF (substr($xaux, 1, 2) < 10)
                        break;
                    case 3: // checa las unidades
                        if (substr($xaux, 2, 1) < 1) { // si la unidad es cero, ya no hace nada
                            
                        } else {
                            $key = (int) substr($xaux, 2, 1);
                            $xseek = $xarray[$key]; // obtengo directamente el valor de la unidad (del uno al nueve)
                            $xsub = subfijo($xaux);
                            $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
                        } // ENDIF (substr($xaux, 2, 1) < 1)
                        break;
                } // END SWITCH
            } // END FOR
            $xi = $xi + 3;
        } // ENDDO

        if (substr(trim($xcadena), -5, 5) == "ILLON") // si la cadena obtenida termina en MILLON o BILLON, entonces le agrega al final la conjuncion DE
            $xcadena.= " DE";

        if (substr(trim($xcadena), -7, 7) == "ILLONES") // si la cadena obtenida en MILLONES o BILLONES, entoncea le agrega al final la conjuncion DE
            $xcadena.= " DE";

        // ----------- esta línea la puedes cambiar de acuerdo a tus necesidades o a tu país -------
        if (trim($xaux) != "") {
            switch ($xz) {
                case 0:
                    if (trim(substr($XAUX, $xz * 6, 6)) == "1")
                        $xcadena.= "UN BILLON ";
                    else
                        $xcadena.= " BILLONES ";
                    break;
                case 1:
                    if (trim(substr($XAUX, $xz * 6, 6)) == "1")
                        $xcadena.= "UN MILLON ";
                    else
                        $xcadena.= " MILLONES ";
                    break;
                case 2:
                    if ($xcifra < 1) {
                        $xcadena = "CERO PESOS $xdecimales/100 M.N.";
                    }
                    if ($xcifra >= 1 && $xcifra < 2) {
                        $xcadena = "UN PESO $xdecimales/100 M.N. ";
                    }
                    if ($xcifra >= 2) {
                        $xcadena.= " PESOS $xdecimales/100 M.N. "; //
                    }
                    break;
            } // endswitch ($xz)
        } // ENDIF (trim($xaux) != "")
        // ------------------      en este caso, para México se usa esta leyenda     ----------------
        $xcadena = str_replace("VEINTI ", "VEINTI", $xcadena); // quito el espacio para el VEINTI, para que quede: VEINTICUATRO, VEINTIUN, VEINTIDOS, etc
        $xcadena = str_replace("  ", " ", $xcadena); // quito espacios dobles
        $xcadena = str_replace("UN UN", "UN", $xcadena); // quito la duplicidad
        $xcadena = str_replace("  ", " ", $xcadena); // quito espacios dobles
        $xcadena = str_replace("BILLON DE MILLONES", "BILLON DE", $xcadena); // corrigo la leyenda
        $xcadena = str_replace("BILLONES DE MILLONES", "BILLONES DE", $xcadena); // corrigo la leyenda
        $xcadena = str_replace("DE UN", "UN", $xcadena); // corrigo la leyenda
    } // ENDFOR ($xz)
    //echo "return:".$xcadena; 
    return trim($xcadena);
}

// END FUNCTION

function subfijo($xx)
{ // esta función regresa un subfijo para la cifra
    $xx = trim($xx);
    $xstrlen = strlen($xx);
    if ($xstrlen == 1 || $xstrlen == 2 || $xstrlen == 3)
        $xsub = "";
    //
    if ($xstrlen == 4 || $xstrlen == 5 || $xstrlen == 6)
        $xsub = "MIL";
    //
    return $xsub;
}
	function codigo_qr1($usuario,$re,$rr,$total,$uuid)
	{  
		//Declaramos una carpeta temporal para guardar la imagenes generadas
		//$dir = 'temp/';
			$nqr 	="imagenes/";
			//echo "<br>";
			//Si no existe la carpeta la creamos
			if (!file_exists($nqr))
			    mkdir($nqr);
			//Declaramos la ruta y nombre del archivo a generar
			$filename = $nqr.$usuario.'.png';

			//Parametros de Condiguración
				
			$tamaño = 5; //Tamaño de Pixel ancho y largo
			$level = 'H'; //Precisión Baja
			$framSize = 3; //Tamaño en blanco
				//aqui resive la variable nombre 
				$re;
				$rr;
				$total;
				$uuid;
			$cadenaQR= "?re=".$re."+&rr=".$rr."+&tt=".$total."+&id=".$uuid;
			$contenido = $cadenaQR; //Texto
			    //Enviamos los parametros a la Función para generar código QR 
			QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
			//::::::::::::::::::::::::::Mostramos la imagen generada:::::::::::::::::::::::::://
				//echo '<img src="'.$fqr.basename($filename).'" /><hr/>';  
		return ($filename);
	}
	function fecha_hora(){
	date_default_timezone_set("America/Mexico_City");
	$hoy = getdate();
	//print_r($hoy);
	return $fecha= "$hoy[mday]$hoy[mon]$hoy[year]";
	}
	function nombre_base($name){
		$extension = pathinfo($name, PATHINFO_EXTENSION);
  		return $nombre_base = basename($name, '.'.$extension);  
	}
?>