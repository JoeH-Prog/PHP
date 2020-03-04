<?php

	session_start();
	
	if($_SESSION['logou'] == 1){
		$id = $_GET['id'];
		
		$servidor = mysqli_connect("localhost","root","","veiculos");
		
		mysqli_query($servidor,"delete from cadastro where id = $id");
		
		header('Location: lista.php');
		
	}
	else{
		
		header('Location: index.html');
		
	}






?>