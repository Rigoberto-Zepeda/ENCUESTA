<?php 
include_once 'include/user.php';
include_once 'include/userSession.php';

$userSession = new UserSession();
$user = new User();

if (isset($_SESSION['user'])) { 
	//echo "Hay Sesiones abiertas";


	$user->setUser($userSession->getCurrentUser());

	include_once 'encuesta.php';
	
}else if (isset($_POST['username']) && isset($_POST['password'])) {
	//echo "Validacion de login";

	$userForm=$_POST['username'];
	$passForm=$_POST['password'];

	//$user=new User();
	if ($user->userExists($userForm,$passForm)) {

		$userSession->setCurrentUser($userForm);
		$user->setUser($userForm);
		include_once 'encuesta.php';

		//echo "Usuario Valido";
		
	}else{ //echo "Nombre de Usuario y/o password incorrecto";
		$errorLogin = "Nombre de Usuario y/o password incorrecto";
		include_once 'vistas/login.php';
}
}else{

	//echo "Login";
	include_once 'vistas/login.php';
}
// 
?>