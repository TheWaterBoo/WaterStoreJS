<?php
include('connect.php');
session_start();

if(isset($_POST['signup'])){
    $usuario = $_POST['username'];
    $correo = $_POST['email'];
    $contraseña =$_POST['password'];
    //Con password_hash no se almacena la contraseña solo como texto, si no que se usa
    //password_hash para que genere un codigo aleatorio de 60 caracteres y se almacene eso
    //en lugar de una contraseña sin formato
    $password_hash = password_hash($contraseña, PASSWORD_BCRYPT);

    $query = $connection->prepare("SELECT * FROM usuarios WHERE email=:correo");
    $query->bindParam("correo", $correo, PDO::PARAM_STR);
    $query->execute();
    //Aca se comprueba si el correo esta o no registrado en la base de datos
    if($query->rowCount() == 0){
        $query = $connection->prepare("INSERT INTO usuarios(username,password,email) VALUES (:usuario,:password_hash,:correo)");
        $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("correo", $correo, PDO::PARAM_STR);
        $result = $query->execute();

        if($result){ ?>
            <script>alert("Te has registrado correctamente!!");</script>
            <?php
            include('otherindex.php');
        } else { ?>
            <script>alert("Ha ocurrido un error!\nVuelve a intentarlo mas tarde");</script>
            <?php
            include('register.php');
        }
    } else{ ?>
        <script>alert("Este usuario y/o correo ya estan registrados!!")</script>
        <?php
        include('register.php');
    }
}
?>