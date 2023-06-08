<?php //Conexion a base de datos para que guarde datos en la base de datos con INSERT

include "../includes/config.php";
include "../includes/conexiondb.php";

if (isset($_POST['btnGuardar']))
{
    include "../includes/conexiondb.php";

    if ($conn)
    {
        $nombre_persona = $_POST['txtNombrePersona'];
        $nombre_usuario = $_POST['txtNombreusuario'];
        $password = $_POST['txtContrasena2'];
        $tipo_usuario = $_POST['cboTipoUsuario'];

        $query = "INSERT INTO usuarios (nombre_persona,nombre_usuario,password, tipo_usuario) VALUES ('$nombre_persona', '$nombre_usuario', '$password', '$tipo_usuario')";
        
        if(mysqli_query($conn, $query))
        {
            echo "Datos guardados con exito";
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
    <link rel="stylesheet" href="../estilos/estilo.css?7.3"/>
   
    <script type="text/javascript"> /*Scripts Locales*/
       
       /*Funcion para comparar las contraseñas ingresadas por el usuario*/
       function funcion_CompararContrasenas()
       {
        var contrasena1 = document.getElementById("txtContrasena1");
        var contrasena2 = document.getElementById("txtContrasena2");

        if (contrasena1.value === contrasena2.value)
        {
            document.getElementById("lblCompararContrasenas").innerHTML = "Las Contraseñas son Iguales";
        }
        else
        {
            document.getElementById("lblCompararContrasenas").innerHTML = "Las Contraseñas no Coinciden";

            document.getElementById("txtContrasena2").innerHTML = "";
            document.getElementById("txtContrasena2").focus();
        }
        }
    </script>

</head>
<body>
    <script type="text/javascript">
        alert("Bienvenido al modulo de Usuarios"); /*Comentario*/
    </script>
    <div class="signupFrm">
        <form action="" class="form" method= "post">
        <h1 class="title">Modulo Usuarios</h1>
  
        <div class="inputContainer">
          <input type="text" class="input" placeholder="a" name="txtNombrePersona">
          <label for="" class="label" name="txtNombrePersona">Nombre Persona</label>
        </div>
        <div class="inputContainer">
            <input type="text" class="input" placeholder="a" name="txtNombreusuario">
            <label for="" class="label" name="txtNombreusuario" >Nombre Usuario</label>
          </div>
          <div class="inputContainer">
            <input type="password" class="input" placeholder="a" id="txtContrasena1" name="txtContrasena1">
            <label for="" class="label" name="txtContrasena1" >Password</label>
          </div>
          <div class="inputContainer">
            <input type="password" class="input" placeholder="a" id="txtContrasena2" name="txtContrasena2" onchange="funcion_CompararContrasenas()"><label style="font-style: oblique;" class="labelMensaje" id="lblCompararContrasenas" ></label><br></td>
            <label for="" class="label" name="txtContrasenna2" >Repeat Password</label>
          </div>
          <div class="inputContainer">
            <select type="text" class="input" placeholder="a" name="cboTipoUsuario" >
                <option selected disabled value = "">-- Seleccione un Tipo --</option>

          
                <?php
                /*Mostrar arreglo en el select*/
                    foreach ($tipo_usuarios as $item)
                    {
                        echo "<option value = ' $item ' > $item </option> ";
                    }

                ?>
                
  
            </select>
            <label for="" class="label" name="txtTipoCliente">Tipo de Usuario</label>
        </div>
        <input type="submit" name="btnGuardar" class="submitBtn" value="Guardar">
        <input type="reset" name="btnReset" class="submitBtn2" value="Resetear">

        <button>
            <a href = "edit-button.php" target="contenedorPrincipal">Ver Usuarios</a>
        </button>
        </form>
    </div>
</body>
</html>