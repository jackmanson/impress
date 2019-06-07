<?php
	session_start();
	if(!isset($SESSION['$login_jungla']) AND $SESSION['$login_jungla'] != 1){
		header("Location: login/login.php");
		exit;
	}

	$title = "junglafari";
	$active_facturas="active";
	$active_productos="";
	$active_clientes="";
	$active_usuarios="";	

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php include (headjungla.php); ?>
</head>
<body>

<?php
	echo "Hola mundo";
?>

</body>
</html>