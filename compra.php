<!DOCTYPE html>
<html>
    <head>
        <title>COMPRA</title>
        <LINK REL=StyleSheet HREF="compra.css" TYPE="text/css" MEDIA=screen>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head>
<body>
<form method="post">
        
    <div class="contenedor">
        <h1 class="titulo">REGISTRO DE COMPRA</h1>
            <br>
            <label class="text1">DATOS PERSONALES</label>
            <br>
            <br>
        <div class="i2">
        <input type="text" name="name" class="in1"  placeholder="Nombre Completo">
        </div>

        <div class="i3">
        <input type="text" name="direccion" class="in2"  placeholder="Dirección de entrega">
        <br>
        <br>
        </div>

        <div class="i4">
        <input type="email" name="correo" class="in3"  placeholder="Correo de contacto">
        </div>
        <div class="i5">
        <input type="tel" class="in4" name="telefono" placeholder="Telefono de Contacto">
        <br>
        <br>
        </div>
        <label class="product">DATOS DEL PEDIDO</label>
        <br>
        <br>
        <div class="i6">
        <input type="password" class="in5" name="numero" placeholder="Numero de Tarjeta">
        </div>
        <br>
        <label class="textc">Fecha de caducidad de Tarjeta</label>
        <div class="i7">
            
            <br>
        <input type="date" class="in6" name="caducidad">
        <br>
        </div>
        <div class="i8">
        <input type="text" class="in7" name="tamaño" placeholder="Tamaño del Producto">
        <br>
        <br>
        </div>
        <div class="i9">
        <input type="text" class="in8" name="envase" placeholder="Material del Envase">
        <br>
        <br>
        </div>
        <input type="submit" name="enviar" class="boton">
    </div>
</form>

   <?php
    include("re.php");
    ?>
     
</body>
</html>
