<?php
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Cell(22	,10,'CFDI',0,0);
//caja contenedora:		Datos Generales
$pdf->Image($logo_propio,88,5,25);
if ($confirma_logo_nominwine=="si") {
	$pdf->Image($logo_nomiwin,180,-3,25);
}

$pdf->Ln(6.5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(78,10,'comprobante Fiscal Digital Por Internet',0,0);
$pdf->Cell(20,10,'',0,0);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(22,10,'RECIBO DE NOMINA',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(192,192,192);
$pdf->Cell(95,53,'',0,0,'L',true);//Aera A
$pdf->Cell(2,13,'',0,0);//Espacio A-B
$pdf->SetFillColor(192,192,192);
$pdf->Cell(95,70,'',0,1,'L',true);//Aera B
$pdf->SetXY(10,79);
$pdf->SetFillColor(200,220,255);
$pdf->Cell(95,36,'',0,1,'L',true);//Aera C
$pdf->SetXY(107,93);
$pdf->SetFillColor(200,220,255);
$pdf->Cell(95,22,'',0,1,'L',true);//Aera D

$pdf->setXY(10,27);
$pdf->SetFont('Arial','',5);
//$pdf->Cell(45,3.5,'RECIBO DE NOMINA:',0,0);
//$pdf->Cell(50,3.5,'Dato',0,1);
$pdf->Cell(30,3.5,'Certificado SAT:',0,0);
$pdf->Cell(50,3.5,utf8_decode($tfd_NoCertificadoSAT),0,1);
$pdf->Cell(30,3.5,'Certificado del Emisor:',0,0);
$pdf->Cell(50,3.5,utf8_decode($Comprobante_NoCertificado),0,1);
$pdf->Cell(30,3.5,'Fecha y Hora del Certificado:',0,0);
$pdf->Cell(50,3.5,utf8_decode($tfd_FechaTimbrado),0,1);
$pdf->Cell(30,3.5,'Regimen Fiscal:',0,0);
$pdf->Cell(50,3.5,utf8_decode($Emisor_RegimenFiscal),0,1);
$pdf->Cell(30,3.5,'Expedicion:',0,0);
$pdf->Cell(50,3.5,utf8_decode($Comprobante_LugarExpedicion)." - ".utf8_decode($Emisor_RegimenFiscal_catalogo),0,1);
$pdf->Cell(30,3.5,'Tipo de Comprobante:',0,0);
$pdf->Cell(50,3.5,utf8_decode($Comprobante_TipoDeComprobante)." - ".utf8_decode($Comprobante_TipoDeComprobante_catalogo),0,1);
$pdf->Cell(30,3.5,'Folio Serie:',0,0);
$pdf->Cell(50,3.5,utf8_decode($Comprobante_Folio)." - ".utf8_decode($Comprobante_Serie),0,1);
$pdf->Cell(30,3.5,'Fecha y Hora de Emicion:',0,0);
$pdf->Cell(50,3.5,utf8_decode($Comprobante_Fecha),0,1);
$pdf->Cell(30,3.5,'Forma de PAgo:',0,0);
$pdf->Cell(50,3.5,utf8_decode($Comprobante_FormaPago)." - ".utf8_decode($Comprobante_FormaPago_catalogo),0,1);
$pdf->Cell(30,3.5,'Metodo de Pago:',0,0);
$pdf->Cell(50,3.5,utf8_decode($Comprobante_MetodoPago)." - ".utf8_decode($Comprobante_MetodoPago_catalogo),0,1);
$pdf->Cell(30,3.5,'Registro Patronal:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_Emisor_RegistroPatronal),0,1);
$pdf->Cell(30,3.5,'Tipo Nomina:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_TipoNomina),0,1);
//$pdf->Cell(45,3.5,'Sindicalizado:',0,0);
//$pdf->Cell(50,3.5,'Dato',0,1);
//$pdf->Cell(45,3.5,'Clave Estado:',0,0);
//$pdf->Cell(50,3.5,'Dato',0,1);


$pdf->SetXY(10,80);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(45,3.5,'EMPLEADOR:',0,0);
$pdf->Cell(50,3.5,'',0,1);
$pdf->Ln();
$pdf->SetFont('Arial','B',7);
$pdf->Cell(20,3.5,utf8_decode("Nombre Empleador:"),0,1);
$pdf->SetFont('Arial','',7);
$pdf->Cell(30,3.5,utf8_decode($Emisor_Nombre),0,1);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(20,3.5,utf8_decode("RFC:"),0,1);
$pdf->SetFont('Arial','',7);
$pdf->Cell(30,3.5,utf8_decode($Emisor_Rfc),0,1);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(30,3.5,'Registro Patronal:',0,1);
$pdf->SetFont('Arial','',7);
$pdf->Cell(30,3.5,utf8_decode($nomina_Emisor_RegistroPatronal),0,1);
//$pdf->Cell(65,3.5,utf8_decode($Emisor_Nombre),0,1);


$pdf->SetXY(107,27);
$pdf->SetFont('Arial','',5);
$pdf->Cell(45,3.5,'Numero de Empleador:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_Receptor_NumEmpleado),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Tipo de Regimen:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_Receptor_TipoRegimen),0,1);$pdf->SetX(107);
//$pdf->Cell(45,3.5,'Departamento:',0,0);
//$pdf->Cell(50,3.5,'Dato',0,1);
$pdf->SetX(107);
$pdf->Cell(45,3.5,'Puesto:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_Receptor_Puesto),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Riesgo de Puesto:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_Receptor_RiesgoPuesto),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Tipo de Contrato:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_Receptor_TipoContrato),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Antiguedad:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_Receptor_Antigüedad),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Inicio de la Relacion Laboral:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_Receptor_FechaInicioRelLaboral),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Periodo de Pago:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_Receptor_PeriodicidadPago),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Salario Base de Cotizacion:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_Receptor_SalarioBaseCotApor),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Salario Diario Integrado:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_Receptor_SalarioDiarioIntegrado),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Fecha de Pago:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_FechaPago),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Fecha Inicial de Pago:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_FechaInicialPago),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Fecha Final de Pago:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_FechaFinalPago),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Numero de Dias Pagados:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_NumDiasPagados),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Banco:',0,0);
$pdf->Cell(50,3.5,utf8_decode($nomina_Receptor_Banco),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Moneda:',0,0);
$pdf->Cell(50,3.5,utf8_decode($Comprobante_Moneda),0,1);$pdf->SetX(107);
$pdf->Cell(45,3.5,'Tipo de Cambio:',0,0);
$pdf->Cell(50,3.5,utf8_decode($Comprobante_TipoCambio),0,1);$pdf->SetX(107);

$pdf->SetXY(107,93);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(45,3.5,'EMPLEADO:',0,0);

$pdf->Cell(50,3.5,'',0,1);$pdf->SetX(107);
$pdf->Ln();$pdf->SetX(107);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(30,3.5,'Nombre Empleado:',0,0);
$pdf->SetFont('Arial','',7);
$pdf->Cell(65,3.5,$Receptor_Nombre,0,1);$pdf->SetX(107);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(30,3.5,'RFC:',0,0);
$pdf->SetFont('Arial','',7);
$pdf->Cell(65,3.5,$Receptor_Rfc,0,1);$pdf->SetX(107);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(30,3.5,'C.U.R.P.:',0,0);
$pdf->SetFont('Arial','',7);
$pdf->Cell(65,3.5,$nomina_Receptor_Curp,0,1);$pdf->SetX(107);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(30,3.5,'N.S.S.:',0,0);
$pdf->SetFont('Arial','',7);
$pdf->Cell(65,3.5,$nomina_Receptor_NumSeguridadSocial,0,1);$pdf->SetX(107);
$pdf->SetFont('Arial','B',8);

$pdf->SetXY(10,120);
$pdf->Cell(192,15,'',1,0);
$pdf->SetXY(10,120);
$pdf->SetFont('Arial','',8);
$pdf->Cell(50,5,'Dscripcion:',0,1);
$pdf->Cell(25,5,'Cantidad',0,0);
$pdf->Cell(35,5,'Unidad de Medida',0,0);
$pdf->Cell(82,5,'Descripcion',0,0);
$pdf->Cell(25,5,'Precio',0,0);
$pdf->Cell(25,5,'Importe',0,1);
$resultCon = $xml->xpath("//cfdi:Concepto");
$contadorFisico=count($resultCon);
$contadorArreglo=$contadorFisico-1;
for ($i=0; $i <=$contadorArreglo; $i++) { 
	$Concepto=$resultCon[$i];
	$con_ClaveProdServ=$Concepto["ClaveProdServ"];
    $con_NoIdentificacion=$Concepto["NoIdentificacion"];
    $con_Descripcion=$Concepto["Descripcion"];
    $con_Cantidad=$Concepto["Cantidad"];
    $con_Unidad=$Concepto["Unidad"];
    $con_CUnidad=$Concepto["ClaveUnidad"];
    $con_Unidad=$Concepto["Unidad"];
    $con_ValorUnitario=$Concepto["ValorUnitario"];
    $con_Descripcion=$Concepto["Descripcion"];
    $con_ValorUnitario=nuloFloat($Concepto["ValorUnitario"]);
    $con_Descuento=nuloFloat($Concepto["Descuento"]);
    $con_Importe=nuloFloat($Concepto["Importe"]);
	$pdf->Cell(25,5,utf8_decode($con_Descripcion),0,0);
	$pdf->Cell(35,5,utf8_decode($con_Cantidad),0,0);
	$pdf->Cell(82,5,utf8_decode($con_CUnidad),0,0);
	$pdf->Cell(25,5,utf8_decode($con_ValorUnitario),0,0);
	$pdf->Cell(25,5,utf8_decode($con_Importe),0,1);
	$pdf->Ln(3);
}
$pdf->Cell(19,3,'Percepciones',0,1);

$pdf->SetFont('Arial','B',8);
$pdf->Ln(1);
$pdf->Cell(97,10,'',1,0);$pdf->Cell(93,10,'',1,1);
$pdf->Ln(-10);
$pdf->Cell(8,10,'Tipo',0,0);
$pdf->Cell(9,10,'Cable',0,0);
$pdf->Cell(50,10,'Concepto',0,0);
$pdf->MultiCell(15,5,'Importe Grabado',0,0);
$pdf->Ln(-10);$pdf->setX(92);
$pdf->MultiCell(15,5,'Importe Externo',0,0);
$pdf->Ln(-10);$pdf->setX(107);
$pdf->Cell(8,10,'Tipo',0,0);
$pdf->Cell(9,10,'Cable',0,0);
$pdf->Cell(50,10,'Concepto',0,0);
$pdf->Cell(26,10,'Importe',0,1);
$pdf->SetFont('Arial','',7);

$resultPer = $xml->xpath("//nomina12:Percepcion");
$contadorFisico=count($resultPer);
$conPer=$contadorFisico;
$contadorArreglo=$contadorFisico-1;
for ($i=0; $i <=$contadorArreglo; $i++) { 
	$Percepcion=$resultPer[$i];

	$pdf->Cell(8,5,$Percepcion['TipoPercepcion'],1,0);
	$pdf->Cell(9,5,$Percepcion['Clave'],1,0);
	$pdf->Cell(50,5,$Percepcion['Concepto'],1,0);
	$ImporteGravado=$Percepcion['ImporteGravado'];
	$ImporteExento=$Percepcion['ImporteExento'];
	$pdf->Cell(15,5,'$'.nuloFloat($ImporteGravado),1,0);
	$pdf->Cell(15,5,'$'.nuloFloat($ImporteExento),1,1);
	$SumaPercepcion_Importe_Grabado=$ImporteGravado;
//	print_r($SumaPercepcion_Importe_Grabado);
	$SumaPercepcion_Importe_Externo=$Percepcion['ImporteExento']+$Percepcion['ImporteExento'];
	//$pdf->setX(107);
	}


$pdf->SetY(152);$pdf->setX(107);
$resultDed = $xml->xpath("//nomina12:Deduccion");
$contadorFisico=count($resultDed);
$ConDed=$contadorFisico;
$contadorArreglo=$contadorFisico-1;
for ($i=0; $i <=$contadorArreglo; $i++) { 
	$Deduccion=$resultDed[$i];

	$pdf->Cell(8,5,$Deduccion['TipoDeduccion'],1,0);
	$pdf->Cell(9,5,$Deduccion['Clave'],1,0);
	$pdf->Cell(50,5,$Deduccion['Concepto'],1,0);
	$pdf->Cell(26,5,'$'.nuloFloat($Deduccion['Importe']),1,1);
	//echo $importe=$Deduccion['Importe'];
	//echo "<br>";
	//$SumaDeduccion_Importe=$importe + $importe;
	//$suma=250;
	//$sumaTotal=$suma+$suma;

	$pdf->setX(107);
}
if ($conPer < $ConDed) {
	$hiteracionFinal=$ConDed;
}
elseif($conPer > $ConDed) {
	$hiteracionFinal=$conPer;
}
elseif($conPer == $ConDed) {
	$hiteracionFinal=$ConDed;
}
//echo $sumaTotal."<br>";
//echo $SumaDeduccion_Importe."<br>";
$pdf->Ln($hiteracionFinal+1.7);

$pdf->Cell(97,5,'',1,0);$pdf->Cell(93,5,'',1,1);

$pdf->Ln(-5);
$pdf->Cell(27,5,'Suma Percepciones:',0,0);
$pdf->Cell(40,5,'$'.utf8_decode($nomina_Percepciones_TotalExento),0,0);
$pdf->Cell(15,5,'$'.utf8_decode($nomina_Percepciones_TotalGravado),0,0);
$pdf->Cell(15,5,'$'.utf8_decode($nomina_Percepciones_TotalExento),0,0);



$pdf->Cell(27,5,'Suma Deducciones:',0,0);
$pdf->Cell(40,5,'',0,0);
$pdf->Cell(26,5,'$'.utf8_decode($Comprobante_Descuento),0,1);
$pdf->Ln(3);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(26,5,'Importe con letra',0,0);
$pdf->SetFont('Arial','',5);
$pdf->Cell(69,5,utf8_decode($Comprobante_Total_letra),0,0);
$pdf->SetFont('Arial','',8);
$pdf->Cell(47.5,5,'',0,0);
$pdf->SetFillColor(200,220,255);
$pdf->Cell(23.75,5,'Subtotal:',0,0,'L',true);$pdf->Cell(23.75,5,'$'.$Comprobante_SubTotal,0,1,'L',true);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(26,5,"",0,0);
$pdf->SetFont('Arial','',8);
$pdf->Cell(69,5,'',0,0);
$pdf->Cell(47.5,5,'',0,0);
$pdf->Cell(23.75,5,'Descuentos:',0,0,'L',true);$pdf->Cell(23.75,5,'$'.$Comprobante_Descuento,0,1,'L',true);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(26,5,'',0,0);
$pdf->SetFont('Arial','',8);
$pdf->Cell(69,5,'',0,0);
$pdf->Cell(47.5,5,'Firma del Empleado',0,0);
$pdf->SetFillColor(192,192,192);
$pdf->Cell(23.75,5,'Neto a Pagar',0,0,'L',true);$pdf->Cell(23.75,5,'$'.$Comprobante_Total,0,1,'L',true);
$pdf->Ln(-5);
$pdf->SetX(95);
$pdf->Cell(47.5,0,'',1,0);
$pdf->Ln(10);


$datos1 ="||1.1|8A312DE4-85BC-42D7-B82F-C9A9AB7ABBC6|2018-04-
16T10:49:51|SFE0807172W8|lGKokhGxF6/rLULsR87jKHfo7wVJzoV+DferNnoy+SEqU8frBt2H0RKFRoC29aUxDllbI7TBmSriQTHsZpTUTBM1RCDIyGM
C2C/uq34vmqfMh48a/T8//Mu6u2mCPF8besljXCtvFqUv/ABYiEg7lmIcjSyFwekwhPnhthD9M15yJZQ2b83GPz+5yo5cdWbxYR8TkM7VAG19gFb5pfti95a
QhEMlnT3bKbqJu0i1pdWC+bnGqJt6H9v0R+DYVsFz+r+ig8ay3tMjYhFT/xTcQk2K9LsOLX9ylkN0tI9hgAFPBwZvlGqTcUX8/1oJpQfh24VmlffIO9rjEFmBM
96jhw==|00001000000404594081||";

$pdf->MultiCell(190,80,'',0,1);
$pdf->Image($codigoQR,155,210,50);
$pdf->SetXY(10,210);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(70,5,'Cadena Original del Complemento de Certificación Digital del SAT',0,1);
$pdf->SetFont('Arial','',5);
$pdf->Ln(2);
$pdf->MultiCell(120,2,"id=".utf8_decode($tfd_UUID)."+&FechaTimbrado=".utf8_decode($tfd_FechaTimbrado)."+&RfcProvCertif=".utf8_decode($tfd_RfcProvCertif)."+&NoCertificadoSAT=".utf8_decode($tfd_NoCertificadoSAT),0,1);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(70,5,'Cadena Original del Complemento de Certificación Digital del SAT',0,1);
$pdf->SetFont('Arial','',5);
$pdf->Ln(2);
$pdf->MultiCell(120,2,utf8_decode($Comprobante_Sello),0,1);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(70,5,'Cadena Original del Complemento de Certificación Digital del SAT',0,1);
$pdf->SetFont('Arial','',5);
$pdf->Ln(2);
$pdf->MultiCell(120,2,utf8_decode($tfd_SelloSAT),0,1);
//$raizxml=nombre_base($raizxml);
$pdf->Output($raizxml.'.pdf','F');
unlink($xmlCFDI);
unlink($codigoQR);
//unlink($logo_propio);

?>