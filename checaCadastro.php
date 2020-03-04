<?php

	session_start();
	
	if($_SESSION['logou'] == 1) {
		
		include "menu.php";
		
		$servidor = mysqli_connect("localhost","root","","veiculos");
		
		$placa = $_POST['placa'];
		$marca = $_POST['marca'];
		
		$cadastrou = mysqli_query($servidor, "insert into cadastro (placa, marca) values ('$placa','$marca')");
		
		if($cadastrou) {
			echo "Cadastro realizado com sucesso!";
		}
		else {
			echo "Deu merda!";
		}
	}
	else {
		header('Location: index.html');
	}

?>