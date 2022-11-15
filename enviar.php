<?php
	$diagnostico= $_GET["diagnostico"];
	$email = $_GET["email"];
    $servername = "127.0.0.1";
    $database = "mydb";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion


    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        echo "se conecto";
    }