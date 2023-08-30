<?php
    //traemos el archivo de coneccion
    include './coneccion.php';
    //Insertamos la funcion conexion del archivo en una variable propia
    $conexion = conexion();

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "INSERT INTO usuarios (usuario, password) VALUES('$usuario', '$password')";

    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.html");
    }else{
        echo "NO SE PUDO AMORCITO:(";
    }
?>