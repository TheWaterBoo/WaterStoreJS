<!DOCTYPE html>
<!--
    Code by TheWaterBoo
    Yep, and 100% certified by one-hundred ghosts (~ 0 u 0 )~
    Copy of the index
-->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de productos</title>
</head>

<body>
    <h2>Alta de productos</h2>
    <a>Para dar de alta los productos de la pagina water store</a><br>
    <a>Recuerde no usar id duplicados y colocar valores validos</a>
    <form action="productoA.php" method="post">
        <bold><p>id:</p></bold>
        <input type="text" name="id" id="id">
        <bold><p>articulo:</p></bold>
        <input type="text" name="articulo" id="articulo">
        <bold><p>precio:</p></bold>
        <input type="text" name="precio" id="precio">
        <bold><p>cantidad</p> </bold>
        <input type="text" name="cantidad" id="cantidad">
        <br><br>
        <input type="submit" value="Registrar datos">
    </form>
    <br><br>
    <p>Desea hacer un cambio en los productos existentes? Da clic <a href="cambiaproducto.php">AQUI</a></p>
    <p>o quieres eliminar un producto?, entonces da clic <a href="eliminaproducto.php">AQUI</a></p>
    <br>
    <a href="../logout.php">Cerrar Sesion!</a>
</body>
</html>