<?php
    //Code by TheWaterBoo
    //Yep, and 100% certified by one-hundred ghosts (~ 0 u 0 )~

    $dbhost = "localhost"; //host donde esta la base de datos
    $dbname = "water_store"; //nombre de la bd
    $dbuser = "root"; //user name
    $dbpass = ""; //password de usuario

    $conexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conexion){
        die ("problemas con la conexion");
    }

    $id = $_POST['id'];
    $article = $_POST['article'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];

    include 'cambiaproducto.php';
    echo '<br>';

    //Coloque un try catch para evitar mandar el error y en su lugar mandar un mensaje
    try{
    $sql="UPDATE `producto` SET `articulo` = '$article' , `precio` = $price , `cantidad` = $amount WHERE `producto`.`id` = $id;";

    mysqli_query($conexion, "SELECT * FROM producto");
    mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    } catch (Exception $e){
        echo '<span style="color:#FF0000;text-align:center;">Algun valor esta duplicado o talvez no es valido<br> trata colocando de nuevo los valores!</span>';
        echo $e;
    }

    //include __DIR__ '/../Productos.html'; 
?>