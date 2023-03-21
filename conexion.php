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
//$sql = "CREATE DATABASE CONCESIONARIO";

//if ($conn -> query($sql) === TRUE){
//     echo "Base de datos creada";
//} else {
//   echo "Error creando la base de datos";
// }

//Cerrar conexión
//$conn -> close();

?>
