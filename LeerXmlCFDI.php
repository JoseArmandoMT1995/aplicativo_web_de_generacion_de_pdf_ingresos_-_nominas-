<?php  
	class LeerCFDI {
	/**
	 * Namespaces
	 */
	private $namespaces;
	/**
	 * Archivo XML
	 */
	private $xml;
	/**
	 * Datos del CFDI
	 */
	private $cfdiDato;
	/**
	 * Datos del tfd
	 */
	private $tfdDato;
	/**
	 * archivoXML Ruta del archivo XML
	 */
	function cargaXml($archivoXML) {

		if (file_exists($archivoXML)) {
			libxml_use_internal_errors(true);
			$this -> xml = new SimpleXMLElement($archivoXML, null, true);
			$this -> namespaces = $this -> xml -> getNamespaces(true);
		} else {
			throw new Exception("Error al cargar archivo XML, verifique que el archivo exista.", 1);
		}

	}

	/**
	 * Obtener los datos del CFDI sin ser TFD
	 */
	function cfdiDato($nodo,$nombre_nodo,$campo_cfdi) {
		if (null == $this  -> xml ->xpath('//'.$nodo.':'.$nombre_nodo)) {
			$this -> cfdiDato='';
		}
		else
		{ 
			foreach ($this  -> xml ->xpath('//'.$nodo.':'.$nombre_nodo) as $contenedor) {
			$this -> cfdiDato = $contenedor[$campo_cfdi];
			}
		}
		
	return $this -> cfdiDato;
	}
	/**
	 * Obtener el TFD de la factura
	 */
	function tfdDato($nodo,$nombre_nodo,$campo) {

		$this -> xml -> registerXPathNamespace('t', $this -> namespaces[$nodo]);
 
		foreach ($this->xml->xpath('//t:'.$nombre_nodo) as $contenedor) {
			$this -> tfdDato = "{$contenedor[''.$campo.'']}";
		}

		return $this -> tfdDato;
	}
	/**
	 * Obtener el tipo del comprobante del  CFDI (Ingreso o Egreso);
	 */
	function tipoComprobante() {

		foreach ($this  -> xml ->xpath('//cfdi:Comprobante') as $comprobante) {
			$this -> tipoComprobante = $comprobante['tipoDeComprobante'] != "" ? $comprobante['tipoDeComprobante'] : $comprobante['TipoDeComprobante'];
		}
		if (strcmp(strtolower($this -> tipoComprobante), 'ingreso') == 0 || strcmp(strtolower($this -> tipoComprobante), 'i') == 0) {
			$this -> tipoComprobante = "I";
		} else {
			$this -> tipoComprobante = "E";
		}

		return $this -> tipoComprobante;
	}
}

?>