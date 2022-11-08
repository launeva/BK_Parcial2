<?php

    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $correo_electronico = $_POST["correo_electronico"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];

    $sql = "UPDATE usuarios SET nombre='".$nombre."' , edad= ".$edad.",". 
    "sexo = '".$sexo."', correo_electronico = '".$correo_electronico."', fecha_nacimiento ='".$fecha_nacimiento."'".
    "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Tu registro tubo éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }

    $conexion->close();

?>