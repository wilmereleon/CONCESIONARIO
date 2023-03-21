<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="CONCESIONARIO";

//Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

//Chech connection
if ($conn -> connect_error){
    die("Error de conexión: ".$conn -> connect_error);
}

//Crear base de datos
$sql = "CREATE TABLE AUTO (placa varchar(6) PRIMARY KEY, marca varchar(15) NOT NULL, modelo INT NOT NULL, color varchar(10) NOT NULL)";

if ($conn -> query($sql) === TRUE){
     echo "Tabla AUTO creada satisfactoriamente";
} else {
   echo "Error en la creación de tabla AUTO";
 }

//Cerrar conexión
$conn -> close();

?>
