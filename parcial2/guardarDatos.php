<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $sexo = $_POST["sexo"];
    $edad = $_POST["edad"];
    $correo_electronico = $_POST["correo_electronico"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];

    $sql = "INSERT INTO usuarios (nombre, edad, sexo, correo_electronico, fecha_nacimiento)". 
    "VALUES ('".$nombre."', ".$edad.", ".$sexo.", '".$correo_electronico."', '".$fecha_nacimiento."')";

    if($conexion->query($sql) === TRUE){
        echo "Tu registro quedo completo! <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>