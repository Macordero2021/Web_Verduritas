<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo.css?7.6"/>

</head>
<body>
    <div class="signupFrm">
        <form action="" class="form">
        <h1 class="title">Modulo Facturacion</h1>
  
        <div class="inputContainer">
          <input type="text" class="input" placeholder="a">
          <label for="" class="label" name="txtidFactura" id="txtidFactura">Id. Factura</label>
        </div>
        <div class="inputContainer">
            <input type="date" class="input" placeholder="a">
            <label for="" class="label" name="txtFecha" id="txtFecha">Fecha</label>
        </div>

        <div class="inputContainer">
            <select type="text" class="input" placeholder="a">
                <option value=""></option>
                <option value="1">1 - Admin</option>
                <option value="2">2 - Cajero1</option>
                <option value="3">3 - Cajero2</option>
                <option value="4">4 - Cajero3</option>
            </select>
        <label for="" class="label" name="txtidUsuario" id="txtidUsuario">Id. Usuario</label>
        </div>
        <div class="inputContainer">
            <select type="text" class="input" placeholder="a">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        <label for="" class="label" name="txtidCliente" id="txtidCliente">Id. Cliente</label>
        </div>
        <div class="inputContainer">
            <select type="text" class="input" placeholder="a">
                <option value=""></option>
                <option value="Contado">Contado</option>
                <option value="Credito">Credito</option>
            </select>
        <label for="" class="label" name="txttipoPago" id="txttipoPago">Tipo de Pago</label>
        </div>
        <div class="inputContainer">
            <select type="text" class="input" placeholder="a">
                <option value=""></option>
                <option value="CRC">CRC</option>
                <option value="USD">USD</option>
            </select>
        <label for="" class="label" name="txtmodeda" id="txtmoneda">Moneda</label>
        </div>
        <div class="inputContainer">
            <input type="text" class="input" placeholder="a">
            <label for="" class="label" name="txtiobservaciones" id="txtiobservaciones">Observaciones</label>
        </div>
        <div class="inputContainer">
            <input type="text" class="input" placeholder="a">
            <label for="" class="label" name="txtproducto" id="txtproducto">Producto</label>
        </div>
        <div class="inputContainer">
            <input type="text" class="input" placeholder="a">
            <label for="" class="label" name="txtcantidad" id="txtcantidad">Cantidad</label>
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
            <input type="text" class="input" placeholder="a">
            <label for="" class="label" name="txtprecioUnitario" id="txtprecioUnitario">Precio Unitario</label>
        </div>
        <div class="inputContainer">
            <input type="text" class="input" placeholder="a">
            <label for="" class="label" name="txtprecioTotal" id="txtprecioTotal">Precio Total</label>
        </div>
        <div class="inputContainer">
            <input type="text" class="input" placeholder="a">
            <label for="" class="label" name="txtSubtotal" id="txtSubtotal">Subtotal</label>
        </div>
        <div class="inputContainer">
            <input type="text" class="input" placeholder="a">
            <label for="" class="label" name="txtDescuento" id="txtDescuento">Descuento</label>
        </div>
        <div class="inputContainer">
            <select type="text" class="input" placeholder="a" id="txtTipoIVA" step="0.001">
                <option value=""></option>
                <option value=13>13%</option>
                <option value=4>4%</option>
                <option value=2>2%</option>
                <option value=1>1%</option>
            </select>
            <label for="" class="label" name="txtTipoIVA">Tipo de IVA</label>
        </div>
        <div class="inputContainer">
            <input type="text" class="input" placeholder="a">
            <label for="" class="label" name="txtTotalPagar" id="txtTotalPagar">Total a Pagar</label>
        </div>

        <input type="submit" name="btnGuardar" class="submitBtn" value="Guardar">
        <input type="reset" name="btnReset" class="submitBtn2" value="Resetear">
        </form>
    </div>



        
</body>
</html>