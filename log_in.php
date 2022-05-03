<?php
include('connect.php');
session_start();

if(isset($_POST['inises'])){
    $usuario = $_POST['username'];
    $contraseña = $_POST['password'];

    $query = $connection->prepare("SELECT * FROM usuarios WHERE username=:usuario");
    $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if(!$result){ ?>
        <script>alert("El usuario no existe!");</script>
        <?php
        include('login.php');
    } else {
        if (password_verify($contraseña, $result['password'])){
            $_SESSION['user_id'] = $result['id']; 
            //Guarda tu nombre en la sesion, solo para darte la bienvenida y la despedida c:
            $_SESSION['user_name'] = $result['username']; 
            if($result['username'] == 'pedro'){ ?>
            <script>alert("Bienvenido administrador!!\nEnseguida sera redirigido al CRUD del sistema c:");</script>
            <?php
            header("Location:php/altaproducto.php");
            } else { ?>
            <script>alert("Bienvenido <?php echo $nombre = $_SESSION['user_name']; ?>!!\nIniciaste sesion correctamente");</script>
            <?php
            include('otherindex.php');
            }
        } else { ?>
            <script>alert("El usuario y/o contraseña no coinciden!");</script>
            <?php
            include('login.php');
        }
    }
}
?>