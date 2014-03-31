<!DOCTYPE html>
<?php
	session_start();
?>
<head>
	<title>Practica 7</title>
</head>
<?php
		if(isset($_SESSION['usuario']) && isset($_SESSION['pass'])){
			header('Location: /inicio.php');
		};
	?>
<html>
	
	<body>
	<form method = "POST" action = "inicio.php">	
		Usuario	</br>
		<input type = "text" name = "usuario" size = "10" maxlength= 			"10"></br></br>
		Contrase&ntilde;a </br>
		<input type = "text" name = "pass" size = "10" maxlength = 			"10"></br>
		<input type = "submit" value= "Iniciar">
		
	</form>
	</body>
	
</html>
