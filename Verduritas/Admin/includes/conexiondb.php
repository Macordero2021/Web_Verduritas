<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "verduritas_db";

    //Conexion con base de datos


    $conn = mysqli_connect($server, $user, $pass, $db);

    //check conexion

    if (!$conn)
    {
        echo("Conexion Fallida: " . mysqli_connect_error()); //el . es concatenar

    }
    else
    {
        echo "";
    }



?>