<!DOCTYPE html>
<html lang="es">
<!--
    Code by TheWaterBoo
    Yep, and 100% certified by one-hundred ghosts (~ 0 u 0 )~
    Copy of the index
-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ProyWebPHP/css/styles.css">
    <title>Eliminar producto</title>
</head>

<body class="phpplantilla">
    <h2>Eliminar Producto</h2>
    <a>Desde aqui puedes eliminar articulos de la water store</a><br>
    <a>Solo ocupas la id del producto a eliminar</a>
    <br>
    <br>
    <a>Tabla de articulos:</a>
    <?php
    $sql = new PDO('mysql:host=localhost;dbname=water_store','root','');
    ?>

    <table class="tablaphp">
        <thead>
            <tr>
                <th>ID</th>
                <th>Articulo</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <?php foreach($sql->query('SELECT * FROM producto') as $row){
            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['articulo']?></td>
                <td><?php echo $row['precio']?></td>
                <td><?php echo $row['cantidad']?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <a>Si un articulo no se elimina trate refrescando la pagina</a>
    <br><br>
    <form action="productoE.php" method="post">
        <bold><a>Ingrese la id del producto: </a></bold>
        <input type="text" name="id" id="id">
        <br><br>
        <input type="submit" value="Eliminar producto">
        <br><br>
        <a>Si quieres agregar mas productos da clic <a href="altaproducto.php">AQUI</a></a>
        <br>
        <a>Si deseas hacer cambios en los productos da clic <a href="cambiaproducto.php">AQUI</a></a>
        <br>
        <a href="../logout.php">Cerrar Sesion!</a>
    </form>
    
</body>
</html>