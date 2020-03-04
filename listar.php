<?php

 session_start();
 
 if($_SESSION['logou'] == 1){
	 
	 include('menu.php');
	 $servidor = mysqli_connect("localhost","root","","veiculos");
	 
	$veiculos = mysqli_query($servidor,"select * from cadastro"); 
	
	while($veiculo = mysqli_fetch_array($veiculos)){
			echo $veiculo['placa'] . "|" . $veiculo['marca']."<br/>";
			
		}
 }
 else{
	 
	 header('Location: index.html');
	 
 }




?>