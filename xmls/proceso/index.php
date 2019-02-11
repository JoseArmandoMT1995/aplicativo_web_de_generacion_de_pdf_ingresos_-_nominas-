<?php  	
	function generar_pdf_nomina($xmlCFDI,$imagen,$imagen_tmp,$confirma_logo_nominwine,$dirpdf,$logo_propio){
		
		//empiezo desde aqui lo anterior se sustitulle.
			
			//echo "$xmlCFDI";
			$raizxml=$dirpdf."/".nombre_base($xmlCFDI);

			$xmlCFDI="xml/".$xmlCFDI;
			
			$xml = simplexml_load_file($xmlCFDI);
			$namespaces = $xml->getDocNamespaces();
			
			if (!isset($namespaces["cfdi"]) )
		   {
		   		echo "Este archivo ($archivoXML) NO es un documento CFDI";
		    	return;
			}

			if($namespaces["cfdi"]!="http://www.sat.gob.mx/cfd/3" 
				|| $namespaces["nomina12"]!="http://www.sat.gob.mx/nomina12")
			{
				echo "Este archivo ($archivoXML) NO es un documento CFDI";
				return;
			}

			require("variables_xml.php");
			require("Datos_nulos.php");
			require("catalogos.php");
			require("Numero_con_letra.php");
			require("codigoqr.php");
			require("todas_las_variables.php");
			require("cfdi_nominwin.php");
			//require("Eliminar_contenido.php");
	}

?>