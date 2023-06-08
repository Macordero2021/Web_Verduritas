<?php //Conexion a base de datos para que guarde datos en la base de datos con INSERT

include "../includes/config.php";
include "../includes/conexiondb.php";

if (isset($_POST['btnGuardar']))
{
    include "../includes/conexiondb.php";

    if ($conn)
    {
        $nombre_proveedor = $_POST['txtNombreProveedor'];
        $categoria_proveedor = $_POST['txtTipoProveedor'];

        $query = "INSERT INTO proveedores (nombre_proveedor,categoria_proveedor) VALUES ('$nombre_proveedor', '$categoria_proveedor')";
        
        if(mysqli_query($conn, $query))
        {
            echo '<script>alert("Datos guardados con exito")</script>';
        }
        else{
            echo "Disculpe, hay un error";
        }
        mysqli_close($conn);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo.css?6.7"/>    
</head>
<body>
    <div class="signupFrm">
        <form action="" class="form" method="post">
        <h1 class="title">Modulo Proveedores</h1>
  
        <div class="inputContainer">
          <input type="text" class="input" placeholder="a" name="txtNombreProveedor">
          <label for="" class="label" name="txtNombreProveedor" id="txtNombreProveedor">Nombre Proveedor</label>
        </div>
        <div class="inputContainer">
            <select type="text" class="input" placeholder="a" name="txtTipoProveedor">
                <option value=""></option>
                <option value="Verduras">Verduras</option>
                <option value="Frutas">Frutas</option>
                <option value="Bebidas">Bebidas</option>
                <option value="Servicios">Servicios Profesionales</option>
            </select>
        <label for="" class="label" name="txtTipoProveedor">Tipo de Proveedor</label>
    </div>
        <input type="submit" name="btnGuardar" class="submitBtn" value="Guardar">
        <input type="reset" name="btnReset" class="submitBtn2" value="Resetear">
        </form>
    </div>







</body>
</html>