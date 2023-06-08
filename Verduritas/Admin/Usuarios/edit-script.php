<?php

include "../includes/conexiondb.php";

if(isset($_GET['iduser']) && !empty($_GET['iduser']))
{
    $editIDuser = $_GET['iduser'];
    $query = "SELECT *FROM usuarios WHERE id_usuario = '$editIDuser'";
    $result = $conn ->query($query);
    $editData = $result->fetch_assoc();

    $nombrePersona = $editData['nombre_persona'];
    $nombreUsuario = $editData['nombre_usuario'];
    $pass = $editData['password'];
}


?>