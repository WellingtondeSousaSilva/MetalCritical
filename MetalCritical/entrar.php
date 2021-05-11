<?php 

	session_start();

	$login = isset($_POST['usuario']) ? $_POST['usuario']: "";
	$password = isset($_POST['senha']) ? $_POST['senha']: "";

	if ($login == "metalcritical" and $password == "495720"){

		$_SESSION['logado'] = true;

		header("Location: restrito.php");
	}else{
		header("Location: form_login.php");
	}

?>