<?php
include(conexion.php);
	if(isset($POST['submit'])){
		$placa = $POST['placa'];
		$marca = $POST['marca'];
		$modelo = $POST['modelo'];
		$color = $POST['color'];

		$sql = "INSERT INTO AUTO (placa, marca, modelo, color) VALUES ($placa, $marca, $modelo, $color);";

		if($conn -> query($sql) === TRUE){
			   echo "Nueva inserción creada";
		}
		else {
			   echo "Error: ".$conn -> error;
		}
   }
?>
