<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $conexion = new mysqli("localhost", "root", "", "SOLICITUDES");

    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $apellido = $conexion->real_escape_string($_POST["apellido"]);
    $nombre_user = $conexion->real_escape_string($_POST["nombre_user"]);
    $email = $conexion->real_escape_string($_POST["email"]);
    $numero_telefono = $conexion->real_escape_string($_POST["numero_telefono"]);
    

    $sql_check = "SELECT 1 FROM usuarios WHERE nombre = '$nombre' OR apellido = '$apellido' OR nombre_user = '$nombre_user' OR email = '$email' OR numero_telefono = '$numero_telefono'";
    $resultado = $conexion->query($sql_check);


 


    }

    if ($resultado->num_rows > 0) {
        header("Location: rechazar.php");
        exit();
      
        }

        $sql_insert = "INSERT INTO registros (nombre, apellido, nombre_user, email, numero_telefono) VALUES ('$nombre', '$apelldio', '$nombre_user', '$email', '$numero_telefono')";



        if ($conexion->query($sql_insert) === TRUE) {
            header("Location: confirmar.php");
            exit();
        }



        $conexion->close();

    




  

