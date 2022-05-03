<?php
//Para mantener las sesiones con la bases de datos, sirve mas para lo que es
//El login y la registracion del usuario
define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'water_store');

try{
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e){
    exit("Error!! - ".$e->getMessage());
}
?>