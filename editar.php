<?php

	session_start();
	
	if($_SESSION['logou'] == 1){
		
		
	$id = $_GET['id'];
	
	$servidor = mysqli_connect("localhost","root","","veiculos");
	
	$veiculos = mysqli_query($servidor, "select * from cadastro where id = $id");
	
	while($veiculo = mysqli_fetch_array($veiculos)){
	
	echo "
	
	<form action='checaEdicao.php' method='post'>
	
		<input type='hidden' value='".$veiculo['id']."'>
		Placa: <input type='text' name='placa' name='id' value='".$veiculo['placa']."'><br>
		Marca: <input type='text' name='marca' value='".$veiculo['marca']."'><br>
		<br><input type='submit' value='Editar Veiculo'>
	</form>
	
	";
	
	}
	else{
		header('Location: index.html');
	 }
	
	}
?>