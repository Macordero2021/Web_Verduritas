
<link rel="stylesheet" href="../estilos/estilo.css?7.4"/>
   

<?php

include "../includes/conexiondb.php";
include "edit-script.php";
include "update-script.php";

?>

<form action="" method="post" class="form">

<label>Nombre Persona</label>

<input

    type="text"
    name="txtNombrePersona"
    value="<?php echo $nombrePersona ?>">
<br>
<label>Nombre Usuario</label>

    <input

    type="text"
    name="txtNombreUsuario"
    value="<?php echo $nombreUsuario ?>">
<br>
<label>Password</label>
    <input

    type="text"
    name="txtNombrePassword"
    value="<?php echo $pass ?>">
<br>
    <input
    type="submit"
    name="btnActualizar"
    value="Actualizar Datos">
</form>