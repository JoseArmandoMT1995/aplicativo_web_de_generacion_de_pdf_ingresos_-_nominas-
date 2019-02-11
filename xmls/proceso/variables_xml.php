<?php
$cfdi = new LeerCFDI();
$cfdi -> cargaXml($xmlCFDI);
//datos de cdfi
	$nombre_nodo="Comprobante";
$Comprobante_Version= $cfdi -> cfdiDato("cfdi",$nombre_nodo,"Version");
$Comprobante_Serie=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Serie");
$Comprobante_Folio=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Folio");
$Comprobante_Fecha=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Fecha");
$Comprobante_FormaPago=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"FormaPago");
$Comprobante_NoCertificado=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"NoCertificado");
$Comprobante_CondicionesDePago=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"CondicionesDePago");
$Comprobante_SubTotal=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"SubTotal");
$Comprobante_Descuento=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Descuento");
$Comprobante_Moneda=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Moneda");
$Comprobante_TipoCambio=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"TipoCambio");
$Comprobante_Total=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Total");
$Comprobante_Total_letra=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Total");
$Comprobante_TipoDeComprobante=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"TipoDeComprobante");
$Comprobante_MetodoPago=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"MetodoPago");
$Comprobante_LugarExpedicion=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"LugarExpedicion");
$Comprobante_Sello=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Sello");
$Comprobante_Certificado=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Certificado");
	$nombre_nodo="Emisor";
$Emisor_Rfc=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Rfc");
$Emisor_Nombre=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Nombre");
$Emisor_RegimenFiscal=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"RegimenFiscal");
	$nombre_nodo="Receptor";
$Receptor_Rfc=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Rfc");
$Receptor_Nombre=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Nombre");
$Receptor_UsoCFDI=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"UsoCFDI");
	$nombre_nodo="Impuestos";
$Impuestos_TotalImpuestosRetenidos=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"TotalImpuestosRetenidos");
$Impuestos_TotalImpuestosTrasladados=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"TotalImpuestosTrasladados");
	$nombre_nodo="Traslado";
$Traslado_Impuesto=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Impuesto");
$Traslado_TipoFactor=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"TipoFactor");
$Traslado_TasaOCuota=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"TasaOCuota");
$Traslado_Importe=$cfdi -> cfdiDato("cfdi",$nombre_nodo,"Importe");
//datos de tfc
	$nombre_nodo="TimbreFiscalDigital";
$tfd_Version= $cfdi -> tfdDato("tfd",$nombre_nodo,"Version");
$tfd_UUID= $cfdi -> tfdDato("tfd",$nombre_nodo,"UUID");
$tfd_FechaTimbrado= $cfdi -> tfdDato("tfd",$nombre_nodo,"FechaTimbrado");
$tfd_RfcProvCertif= $cfdi -> tfdDato("tfd",$nombre_nodo,"RfcProvCertif");
$tfd_SelloCFD= $cfdi -> tfdDato("tfd",$nombre_nodo,"SelloCFD");
$tfd_NoCertificadoSAT= $cfdi -> tfdDato("tfd",$nombre_nodo,"NoCertificadoSAT");
$tfd_SelloSAT= $cfdi -> tfdDato("tfd",$nombre_nodo,"SelloSAT");
//Nomina
$nombre_nodo="Nomina";
$nomina_Version= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"Version");
$nomina_FechaPago= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"FechaPago");
$nomina_FechaInicialPago= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"FechaInicialPago");
$nomina_FechaFinalPago= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"FechaFinalPago");
$nomina_NumDiasPagados= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"NumDiasPagados");
$nomina_TipoNomina= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"TipoNomina");
$nomina_TotalDeducciones= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"TotalDeducciones");
$nomina_TotalOtrosPagos= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"TotalOtrosPagos");
$nomina_TotalPercepciones= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"TotalPercepciones");
//Emisor
$nombre_nodo="Emisor";
$nomina_Emisor_RegistroPatronal= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"RegistroPatronal");
//Receptor
$nombre_nodo="Receptor";
$nomina_Receptor_Curp= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"Curp");
$nomina_Receptor_TipoContrato= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"TipoContrato");
$nomina_Receptor_TipoRegimen= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"TipoRegimen");
$nomina_Receptor_NumEmpleado= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"NumEmpleado");
$nomina_Receptor_PeriodicidadPago= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"PeriodicidadPago");
$nomina_Receptor_ClaveEntFed= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"ClaveEntFed");
$nomina_Receptor_NumSeguridadSocial= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"NumSeguridadSocial");
$nomina_Receptor_Banco= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"Banco");
$nomina_Receptor_FechaInicioRelLaboral= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"FechaInicioRelLaboral");
$nomina_Receptor_Antigüedad= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"Antigüedad");
$nomina_Receptor_Puesto= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"Puesto");
$nomina_Receptor_SalarioBaseCotApor= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"SalarioBaseCotApor");
$nomina_Receptor_RiesgoPuesto= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"RiesgoPuesto");
$nomina_Receptor_SalarioDiarioIntegrado= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"SalarioDiarioIntegrado");
//Percepciones
$nombre_nodo="Percepciones";
$nomina_Percepciones_TotalGravado= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"TotalGravado");
$nomina_Percepciones_TotalExento= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"TotalExento");
$nomina_Percepciones_TotalSueldos= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"TotalSueldos");
//Deducciones
$nombre_nodo="Deducciones";
$nomina_Deducciones_TotalOtrasDeducciones= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"TotalOtrasDeducciones");
$nomina_Deducciones_TotalImpuestosRetenidos= $cfdi -> cfdiDato("nomina12",$nombre_nodo,"TotalImpuestosRetenidos");
?>
