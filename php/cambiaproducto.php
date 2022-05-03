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
    <title>Modificacion de productos</title>
</head>

<body class="phpplantilla">
    <h2>Modificacion de productos</h2>
    <a>Agregua o quita stock de los articulos, cambia su nombre o su precio</a><br>
    <a>Recuerde agregar la id del producto a modificar</a><br>
    <a>Una vez termine de ingresar en los campos en blanco solo presione "Guardar cambios"</a>
    <br>
    <br>
    <a>Coloque la id del objeto a editar y luego guarde cambios: </a>
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

        <tbody>
            <form action="productoC.php" method="post">
            <td><input type="text" name="id" placeholder="Ingrese id"></td>
            <td><input type="text" name="article" placeholder="Ingrese nombre articulo"></td>
            <td><input type="text" name="price" placeholder="Ingrese precio"></td>
            <td><input type="text" name="amount" placeholder="Ingrese cantidad"></td>
            <?php foreach($sql->query('SELECT * FROM producto') as $row){
                ?>
                <tr>
                    <td><input type="text" value="<?php echo $row['id']?>" readonly ></td>
                    <td><input type="text" value="<?php echo $row['articulo']?>" readonly></td>
                    <td><input type="text" value="<?php echo $row['precio']?>" readonly></td>
                    <td><input type="text" value="<?php echo $row['cantidad']?>" readonly></td>
                </tr>
            <?php
            }
            ?>
            <input type="submit" value="         Guarda los cambios">
            </form>
        </tbody>
    </table>
    <br>
    <a>Si quieres agregar mas productos da clic <a href="altaproducto.php">AQUI</a></a>
    <br>
    <a>o quieres eliminar un producto?, entonces da clic <a href="eliminaproducto.php">AQUI</a></a>
    <br>
    <a href="../logout.php">Cerrar Sesion!</a>
</body>
</html>