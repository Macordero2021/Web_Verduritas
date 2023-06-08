
<link rel="stylesheet" href="../estilos/estilo.css?7.4"/>
   

<?php
include "../includes/conexiondb.php";
include "fetch-script.php";

?>

<h1 class="form">Usuarios Registrados</h1>
<table class="form">
    <thead>
        <th>id</th>
        <th>Nombre persona</th>
        <th>Nombre usuario</th>
        <th>Password</th>
        <th>Tipo usuario</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        <?php
            if(count($options) > 0)
            {
                foreach ($options as $option)
                {
        ?>
                    <tr>
                        <td> <?php echo $option['id_usuario'] ?></td>
                        <td> <?php echo $option['nombre_persona'] ?></td>
                        <td> <?php echo $option['nombre_usuario'] ?></td>
                        <td> <?php echo $option['password'] ?></td>
                        <td> <?php echo $option['tipo_usuario'] ?></td>
                        <td> <a href="edit-form.php?iduser=
                        <?php $option['id_usuario']; ?>">Editar</a> </td>
                    </tr>
            <?php 
                }
            }
            ?>   
    </tbody>
</table>