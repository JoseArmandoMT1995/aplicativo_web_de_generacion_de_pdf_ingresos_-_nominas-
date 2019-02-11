<?php  

/*
$Emisor_RegimenFiscal_catalogo=seleccionar_Descripcion_de_donde("Descripcion"," regimenfiscal","id_regimenfiscal",$Emisor_RegimenFiscal);
$Receptor_UsoCFDI_catalogo=seleccionar_Descripcion_de_donde("Descripcion","  usocfdi","id_UsoCFDI",$Receptor_UsoCFDI); 
$Comprobante_TipoDeComprobante_catalogo=seleccionar_Descripcion_de_donde("Descripcion","   tipodecomprobante","id_TipoDeComprobante",$Comprobante_TipoDeComprobante);
$Comprobante_MetodoPago_catalogo=seleccionar_Descripcion_de_donde("Descripcion","metodopago","id_metodoPago",$Comprobante_MetodoPago);
$Comprobante_FormaPago_catalogo=seleccionar_Descripcion_de_donde("Descripcion"," formapago","	id_FormaPago",$Comprobante_FormaPago);
*/
$Emisor_RegimenFiscal_catalogo=php_lineal_descripcion("regimenfiscal",$Emisor_RegimenFiscal);
$Receptor_UsoCFDI_catalogo=php_lineal_descripcion("usocfdi",$Receptor_UsoCFDI); 
$Comprobante_TipoDeComprobante_catalogo=php_lineal_descripcion("tipodecomprobante",$Comprobante_TipoDeComprobante);
$Comprobante_MetodoPago_catalogo=php_lineal_descripcion("metodopago",$Comprobante_MetodoPago);
$Comprobante_FormaPago_catalogo=php_lineal_descripcion("formapago",$Comprobante_FormaPago);

?>