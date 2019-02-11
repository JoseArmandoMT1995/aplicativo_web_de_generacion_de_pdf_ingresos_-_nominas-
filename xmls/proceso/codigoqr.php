<?php
	
	$codigoQR=codigo_qr1(
		rand(0, 10),
		$Emisor_Rfc,
		$Receptor_Rfc,
		$Comprobante_Total,
		$tfd_UUID
	);
?>