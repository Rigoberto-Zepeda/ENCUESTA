<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--<meta  http-equiv="refresh" content="10">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="maine.css">
	<title>SESiONES</title>
</head>
<body>

	<form action="" method="POST">
		<?php

if (isset($errorLogin)) {
	echo $errorLogin;
}
		?>
		<h2>Iniciar Session</h2>
		<p>Nombre Del Usuario:<br>
		<input type="text" name="username"></p>
		<p>Password:<br>
			<input type="password" name="password"></p>
			<p class="center"><input type="submit" value="Iniciar Sesion" ></p>
		

	</form>

</body>
</html>