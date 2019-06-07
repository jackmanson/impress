<?php /*
	// checking for minimum PHP version
	if (version_compare(PHP_VERSION, '5.3.7', '<')) {
	    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
	} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
	    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
	    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
	    require_once("libraries/password_compatibility_library.php");
	}

	// include the configs / constants for the database connection
	require_once("config/db.php");

	// load the login class
	require_once("classes/Login.php");

	// create a login object. when this object is created, it will do all login/logout stuff automatically
	// so this single line handles the entire login process. in consequence, you can simply ...
	$login = new Login();

	// ... ask if we are logged in here:
	if ($login->isUserLoggedIn() == true) {
	    // the user is logged in. you can do whatever you want here.
	    // for demonstration purposes, we simply show the "you are logged in" view.
	   header("location: facturas.php");

	} else {
	    // the user is not logged in. you can do whatever you want here.
	    // for demonstration purposes, we simply show the "you are not logged in" view.
	*/

	$title = "junglafari.com";
?>

<!DOCTYPE HTML>
<html>
	<head>
		<?php //include (loginhead.php); ?>
		<title><?php echo $title;?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1 class="fuenteOficial">IMPRESS++</h1>
				<p>Lo que podemos hacemos es darte lo mejor de nosotros<br />
				con calidad y buen precio.</p>
			</header>

		<!-- Signup Form -->
			<form id="signup-form" method="post" action="#">
				<input type="email" name="email" id="email" placeholder="Tú email y te respondemos." />
				<!--<input type="password" name="clave" id="" placeholder="Contraseña" />-->
				<input type="submit" value="Enviar" />
			</form>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Untitled.</li><li>Credits: JACKMASON</li>
				</ul>
			</footer>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>

</html>