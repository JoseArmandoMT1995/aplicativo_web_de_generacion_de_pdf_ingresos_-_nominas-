<?php
require('../librerias/fpdf17/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->Image($logo,5,1,30);
$pdf->Image($logo_factuwin,95,-3,25);
$pdf->Ln(6.5);
$pdf->SetFont('Arial','B',20);
$pdf->Cell(22   ,10,'CFDI',0,0);
//caja contenedora:     Datos Generales
$pdf->SetFont('Arial','B',10);
$pdf->Cell(22,10,'Comprobante Fiscal Digital Por Internet',0,1);
$pdf->SetFillColor(200,220,255);
$pdf->Cell(100,42,'',0,0,'L',true);//Aera A
$pdf->Cell(10,13,'',0,0);//Espacio A-B
$pdf->SetFillColor(192,192,192);
$pdf->Cell(80,13,'',0,1,'L',true);//Aera B
$pdf->SetXY(120,36);
$pdf->SetFillColor(200,220,255);
$pdf->Cell(80,33,'',0,1,'L',true);//Aera C
$pdf->setXY(140,118);

//contenido:            Datos Generales
/**Area A**/
$pdf->SetXY(12,27);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(96,3,'Emisor:',1,1);
$pdf->Ln(2);
$pdf->setX(12);
$pdf->SetFont('Arial','',8);
//variables obtenidas manualmente
$pdf->SetFont('Arial','',6);
$pdf->Cell(28,3,utf8_decode($Emisor_Rfc),0,0);$pdf->Cell(50,3,utf8_decode($Emisor_Nombre),0,1);
$pdf->Ln(2);
$pdf->setX(12);
$pdf->Cell(18,3,'Regimen Fiscal:',0,0);
$pdf->Cell(10,3,utf8_decode($Emisor_RegimenFiscal),0,0);
$pdf->Cell(45,3,utf8_decode($Emisor_RegimenFiscal_catalogo),0,1);
$pdf->SetXY(12,40);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(96,3,'Receptor:',1,1);
$pdf->SetFont('Arial','',6);

$pdf->Ln(2);
$pdf->setX(12);
$pdf->Cell(28,3,utf8_decode($Receptor_Rfc),0,0);$pdf->Cell(50,3,utf8_decode($Receptor_Nombre),0,1);
$pdf->Ln(2);
$pdf->setX(12);
$pdf->Cell(18,3,'Uso de CFDI:',0,0);
$pdf->Cell(10,3,utf8_decode($Receptor_UsoCFDI),0,0);
$pdf->Cell(45,3,utf8_decode($Receptor_UsoCFDI_catalogo),0,1);

/**Area B**/
$pdf->SetXY(122,27);
$pdf->Cell(20,3,'folio fiscal',0,0);
$pdf->Cell(15,3,'',0,0);
$pdf->Cell(40,3,utf8_decode($Comprobante_Folio),0,1);
$pdf->setX(122);
$pdf->Cell(25,3,'Certificado Sat',0,0);
$pdf->Cell(10,3,'',0,0);
$pdf->Cell(40,3,utf8_decode($tfd_NoCertificadoSAT),0,1);
$pdf->setX(122);
$pdf->Cell(35,3,'Fecha/hora certificado',0,0);
$pdf->Cell(40,3,utf8_decode($tfd_FechaTimbrado),0,1);
/**Area C**/
$pdf->SetXY(122,36);
$pdf->Cell(20,3,'folio/serie',0,0);
$pdf->Cell(15,3,'',0,0);

$pdf->Cell(40,3,utf8_decode($Comprobante_Folio).' - '.utf8_decode($Comprobante_Serie),0,1);
$pdf->SetX(122);
$pdf->Cell(35,3,'fecha/hora emicion',0,0);
$pdf->Cell(40,3,utf8_decode($Comprobante_Fecha),0,1);
$pdf->SetX(122);
$pdf->Cell(35,3,'Lugar de expedicion',0,0);
$pdf->Cell(40,3,utf8_decode($Comprobante_LugarExpedicion),0,1);
$pdf->SetX(122);
$pdf->Cell(35,3,'Fecha de expedicion',0,0);
$pdf->Cell(40,3,utf8_decode($Comprobante_Fecha),0,1);
$pdf->SetX(122);
$pdf->Cell(35,3,'Certificado emisor',0,0);
//no estoy seguro

$pdf->Cell(40,3,utf8_decode($Comprobante_NoCertificado),0,1);
$pdf->SetX(122);
$pdf->Cell(35,3,'Tipo de comprobante',0,0);

$pdf->Cell(40,3,utf8_decode($Comprobante_TipoCambio)." - ".utf8_decode($Comprobante_TipoDeComprobante_catalogo),0,1);
$pdf->SetX(122);
$pdf->Cell(35,3,'Metodo de pago',0,0);

$pdf->Cell(40,3,utf8_decode($Comprobante_MetodoPago)." - ".utf8_decode($Comprobante_MetodoPago_catalogo),0,1);
$pdf->SetX(122);
$pdf->Cell(35,3,'Forma de pago',0,0);
$pdf->Cell(40,3,utf8_decode($Comprobante_FormaPago)." - ".utf8_decode($Comprobante_FormaPago_catalogo),0,1);
$pdf->SetX(122);
$pdf->Cell(35,3,'Moneda',0,0);
$pdf->Cell(40,3,utf8_decode($Comprobante_Moneda),0,1);
$pdf->SetX(122);
$pdf->Cell(35,3,'Tipo de cambio',0,0);
$pdf->Cell(40,3,utf8_decode($Comprobante_TipoCambio),0,1);
/**Area D**/


$pdf->setXY(10,71);
$pdf->SetFont('Arial','B',7);
$pdf->MultiCell(18,3,'Clave producto/ servvicio',0,0);
$pdf->setXY(30,71);
$pdf->MultiCell(26,4.5,'No. identificacion',0,0);
$pdf->setXY(56,71);
$pdf->Cell(65,9,'Descripcion del producto',0,0);
$pdf->Cell(13,9,'Cantidad',0,0);
$pdf->Cell(15,9,'Unidad',0,0);
$pdf->setXY(145,71);
$pdf->MultiCell(13,4.5,'Clave Unidad',0,0);
$pdf->setXY(158,71);
$pdf->MultiCell(13,4.5,'Valor Unitario',0,0);
$pdf->setXY(171,71);
$pdf->Cell(16,9,'Descuento',0,0);
$pdf->Cell(16,9,'Importe',0,1);
$resultCon = $xml->xpath("//cfdi:Concepto");
//Campos Area D

$contador=0;
$arreglo=0;
$contadorFisico=count($resultCon);
$contadorArreglo=$contadorFisico-1;
for ($i=0; $i <=$contadorArreglo; $i++) { 
    $contador++;
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
    $pdf->Cell(18,10,utf8_decode($con_ClaveProdServ),1,0);
    $pdf->Cell(26,10,utf8_decode($con_NoIdentificacion),1,0);
    $pdf->Cell(65,10,utf8_decode($con_Descripcion),1,0);
    $pdf->Cell(13,10,utf8_decode($con_Cantidad),1,0);
    $pdf->Cell(16,10,utf8_decode($con_Unidad),1,0);
    $pdf->Cell(13,10,utf8_decode($con_CUnidad),1,0);
    $pdf->Cell(13,10,'$'.utf8_decode($con_ValorUnitario),1,0);
    $pdf->Cell(16,10,'$'.utf8_decode($con_Descuento),1,0);
    $pdf->Cell(16,10,'$'.utf8_decode($con_Importe),1,1);
}

$pdf->Ln(2);
$pdf->setX(20);
$pdf->SetFont('Arial','B',7);

$pdf->Cell(40,5,'Impuestos transladados',0,1);
$pdf->setX(20);
$pdf->Cell(15,5,'Impuesto',0,0);
$pdf->Cell(15,5,'Base',0,0);
$pdf->Cell(15,5,'Tipo factor',0,0);
$pdf->Cell(15,5,'Tipo cuota',0,0);
$pdf->Cell(15,5,'Importe',0,1);
$pdf->SetFont('Arial','',7);

$resultTran = $xml->xpath("//cfdi:Traslado");

$contador=0;
$arreglo=0;
$contadorFisico=count($resultTran);
$contadorArreglo=$contadorFisico-1;
for ($i=0; $i <=$contadorArreglo; $i++) { 
    $contador++;
    $Traslado=$resultTran[$i];
    $T_Impuesto=$Traslado["Impuesto"];
    $T_Base=nuloFloat($Traslado["Base"]);
    $T_TipoFactor=$Traslado["TipoFactor"];
    $T_TasaOCuota=$Traslado["TasaOCuota"];
    $T_Importe=nuloFloat($Traslado["Importe"]);
    $pdf->setX(20);
    $pdf->Cell(15,3,utf8_decode($T_Impuesto),1,0);
    $pdf->Cell(15,3,utf8_decode($T_Base),1,0);
    $pdf->Cell(15,3,utf8_decode($T_TipoFactor),1,0);
    $pdf->Cell(15,3,utf8_decode($T_TasaOCuota),1,0);
    $pdf->Cell(15,3,utf8_decode($T_Importe),1,1);
}


$pdf->Ln();
$pdf->setX(10);
$pdf->Cell(190,0,'',1,1);
$pdf->Ln(2);
$pdf->SetFont('Arial','B',7);

$pdf->Cell(30,5,'Importe con Letra:',1,0);
$pdf->SetFont('Arial','B',5);
$pdf->Cell(90,5,utf8_decode($Comprobante_Total_letra),1,0);
$pdf->SetFont('Arial','B',7);
$pdf->SetFillColor(200,220,255);
$pdf->Cell(5,5,'',0,0);

$pdf->Cell(40,5,'Subtota:',0,0,'L',true);
$pdf->Cell(25,5,'$'.utf8_decode($Comprobante_SubTotal),0,1,'L',true);

$pdf->Cell(125,5,'',0,0);
$pdf->Cell(40,5,'Descuento:',0,0,'L',true);
$pdf->Cell(25,5,'$'.utf8_decode($Comprobante_Descuento),0,1,'L',true);
$pdf->Cell(125,5,'',0,0);
$pdf->Cell(40,5,'Impuestos Tansladados:',0,0,'L',true);
$pdf->Cell(25,5,'$'.utf8_decode($Impuestos_TotalImpuestosTrasladados),0,1,'L',true);

$pdf->Cell(125,5,'',0,0);
$pdf->Cell(40,5,'Impuestos Retenidos:',0,0,'L',true);
$pdf->Cell(25,5,'$'.utf8_decode($Impuestos_TotalImpuestosRetenidos),0,1,'L',true);

$pdf->Cell(125,5,'',0,0);
$pdf->SetFillColor(192,192,192);
$pdf->Cell(40,5,'Total:',0,0,'L',true);
$pdf->Cell(25,5,'$'.utf8_decode($Comprobante_Total),0,1,'L',true);
$pdf->Ln(2);
$pdf->setX(10);
$pdf->Cell(190,0,'',1,1);
$pdf->Ln(2);


$pdf->MultiCell(190,80,'',0,1);
$pdf->Image($codigoQR,155,210,50);
$pdf->SetXY(10,210);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(70,5,'Cadena Original del Complemento de Certificacion Digital del SAT',0,1);
$pdf->SetFont('Arial','',5);
$pdf->Ln(2);
$pdf->MultiCell(130,2,"id=".utf8_decode($tfd_UUID)."+&FechaTimbrado=".utf8_decode($tfd_FechaTimbrado)."+&RfcProvCertif=".utf8_decode($tfd_RfcProvCertif)."+&NoCertificadoSAT=".utf8_decode($tfd_NoCertificadoSAT),0,1);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(70,5,'Sello digital del contribuyente que lo expide',0,1);
$pdf->SetFont('Arial','',5);
$pdf->Ln(2);
$pdf->MultiCell(130,2,utf8_decode($tfd_SelloCFD),0,1);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(70,5,'Sello Digital del SAT',0,1);
$pdf->SetFont('Arial','',5);
$pdf->Ln(2);
$pdf->MultiCell(130,2,utf8_decode($tfd_SelloSAT),0,1);
$pdf->Output();
?>