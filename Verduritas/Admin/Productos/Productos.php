
<?php
include "../includes/config.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo.css?7.5"/>

    <script type="text/javascript"> /*Scripts Locales*/
    
        function funcion_PrecioIVAI()
        {

            var precioCompra = parseFloat(document.getElementById("txtPrecioCompra").value);/* llama lo que ingresa el cliente*/   
            var Ganancia = parseFloat(document.getElementById("txtGanancia").value);
            var IVA = parseFloat(document.getElementById("txtTipoIVA").value);

            if (isNaN(precioCompra) || isNaN(Ganancia) || isNaN(IVA))   { /* si no es un numero el espacio queda en blanco*/
            return document.getElementById("txtPrecioVenta").value = ("");

        }else{
        
            var CalcularIVA = IVA/100;
            var CalcularPorcentaje = precioCompra + ((Ganancia/100)*100);

            var Resultado = (CalcularPorcentaje  * (CalcularIVA)) + CalcularPorcentaje;

            document.getElementById("txtPrecioVenta").value = Resultado; 
            }

        }

    </script>

</head>
<body>
    <div class="signupFrm">
    <form action="" class="form">
        <h1 class="title">Modulo Productos</h1>

        <?php
        
        
        ?>
  
        <div class="inputContainer">
          <input type="text" class="input" placeholder="a">
          <label for="" class="label" name="txtNombreProducto">Nombre Del Producto</label>
        </div>
        <div class="inputContainer">
            <select type="text" class="input" placeholder="a">
                <option value=""></option>
                <option value="Verdura">Verduras</option>
                <option value="Frutas">Frutas</option>
                <option value="Bebidas">Bebidas</option>
                <option value="Lacteos">Lacteos</option>
                
            </select>
            <label for="" class="label" name="txtCategoriaProducto">Categoria del Producto</label>
        </div>
        <div class="inputContainer">
            <input type="number" class="input" placeholder="a">
            <label for="" class="label" name="txtCantidadDisponible">Cantidad Disponible</label>
        </div>
        <div class="inputContainer">
            <input type="text" class="input" placeholder="a" id="txtPrecioCompra" step="0.001" oninput="funcion_PrecioIVAI()">
            <label for="" class="label" name="txtPrecioCompra" >Precio Compra</label>
        </div>
        <div class="inputContainer">
            <input type="text" class="input" placeholder="a" id="txtGanancia" step="0.001" oninput="funcion_PrecioIVAI()">
            <label for="" class="label" name="txtGanancia" >Ganancia</label>
        </div>
        <div class="inputContainer">
            <select type="text" class="input" placeholder="a" id="txtTipoIVA" step="0.001" oninput="funcion_PrecioIVAI()">
                <option value=""></option>
                <option value=13>13%</option>
                <option value=4>4%</option>
                <option value=2>2%</option>
                <option value=1>1%</option>
            </select>
            <label for="" class="label" name="txtTipoIVA">Tipo de IVA</label>
        </div>
        <div class="inputContainer">
            <input type="text" class="input" placeholder="a" id="txtPrecioVenta" step="0.001">
            <label for="" class="label" name="txtPrecioVenta" >Precio Venta IVAI</label>
        </div>
        <div class="inputContainer">
            <select type="text" class="input" placeholder="a" >
                <option value=""></option>
                <option value="Kilos">Kilos</option>
                <option value="Litros">Litros</option>
                <option value="Unidades">Unidades</option>
            </select>
            <label for="" class="label" name="txtUnidadMedida">Unidad de Medida</label>
        </div>
        <div class="inputContainer">
            <input type="date" class="input" placeholder="a" style="color: #DADCE0;">
            <label for="" class="label" name="txtFechIngreso">Fecha Ingreso</label>
        </div>
        <div class="inputContainer">
            <input type="text" class="input" placeholder="a">
            <label for="" class="label" name="txtProveedor">Proveedor</label>
        </div>
        <div class="inputContainer">
            <label for="" class="label" name="FileFoto">Foto Del Producto</label>
        </div>
        <div class="inputContainer">
            <input  type="file"  class="input" placeholder="a" style="color: #DADCE0;">
        </div>

        <input type="submit" name="btnGuardar" class="submitBtn" value="Guardar" onclick="funcion_PrecioIVAI()">
        <input type="reset" name="btnReset" class="submitBtn2" value="Resetear">
     </form>
    </div>


    <?php

    funcion_mensajeBienvenida();

    ?>
    

</body>
</html>
