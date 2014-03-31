<!DOCTYPE html>
<?php
	session_start();
?>
	<head><title> Inicio </title></head>
<html>
		<?php
		if($_POST['usuario'] == "root" && $_POST['pass'] =="admin"){
			
			if(!isset($_SESSION['usuario']) && !isset($_SESSION['pass']) ){
				$_SESSION['usuario'] = "root";
				$_SESSION['pass'] = "admin";
				echo "Sesion iniciada </br>";
				echo "<a href = '/cerrar.php'>Cerrar</a>";

			};
		
		}else if(isset($_SESSION['usuario']) && isset($_SESSION['pass']) ){

			echo "Sesion iniciada </br>";
				echo "<a href = '/cerrar.php'>Cerrar</a>";
		}else{
			echo "Hola";
			header('Location: /sesion.php');
		};
		?>
	
</html>
