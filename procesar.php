<meta charset="utf-8" />

<?php
	
	$n = $_REQUEST['nombre'];
	$e = $_REQUEST['email'];
	/*$a = $_REQUEST['asunto'];*/
	/*$m = $_REQUEST['mensaje'];*/

	$cabecera = "From: $n <$e>";

	//echo "Nombre: $n <br>";
	//echo "Email: $e <br>";
	//echo "Asunto: $a <br>";
	//echo "Mensaje: $m <br>";

	if (mail("impresstotal@gmail.com", "Asunto: Consulta de un Potencial cliente.", "Mensaje: En espera de respuesta de contacto.", $cabecera)) {
		# code...
		echo "<script>alert('Su email fue enviado exitosamente, le responderemos lo más pronto posible.');location.href ='javascript:history.back()';</script>";
	}
	else
	{
		echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
	}

?>
