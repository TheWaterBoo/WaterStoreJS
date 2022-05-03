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

include 'eliminaproducto.php';
echo '<br>';

//Coloque un try catch para evitar mandar el error y en su lugar mandar un mensaje
try{
    $sql = "DELETE FROM `producto` WHERE `id` = $id;";

    mysqli_query($conexion, "SELECT * FROM producto");
    mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    echo '<span style="color:#00FF00;text-align:center;">Articulo eliminado con exito!!<br></span>';
} catch (Exception $e){
    echo '<span style="color:#FF0000;text-align:center;">Coloca un id numerico valido!!</span>';
}

//include __DIR__ '/../Productos.html';
?>