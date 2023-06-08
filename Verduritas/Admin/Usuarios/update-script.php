<?php

if($_POST['btnActualizar'] && !empty($_GET['iduser']))
{
    $id_usuario = $_GET['iduser'];
    $nombrePersona_nuevo = $_POST['txtNombrePersona'];
    $nombreUsuario_nuevo = $_POST['txtNombreUsuario'];
    $password_nuevo = $_POST['txtPassword'];

    $query = "UPDATE usuarios SET nombre_persona = '$nombrePersona_nuevo', 
        nombre_usuario = '$nombreUsuario_nuevo', password = '$password_nuevo'
        WHERE id_usuario = '$id_usuario'";

    $result = $_Conn->query($query);
    if($result)
    {
        header("location: edit-button.php");
    }


}


?>