<?php
@session_start();
@$iduser = $_SESSION['user_id'];
@$cantcarrito = $_SESSION['carrito'];
@$idcarrito = $_SESSION['id_carrito'];
if($iduser != 0){
    $_SESSION['verify'] = "true";
}
?>

<!DOCTYPE html>
<html lang="es">
<!--
    Code by TheWaterBoo
    Yep, and 100% certified by one-hundred ghosts (~ 0 u 0 )~
    copy of the index
-->
<head>
    <!--HTML con informacion de contacto, esta de relleno por ahora pero luego se le dara mas info :p-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css" as="style">
    <!--Cool font 8)-->
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
    <!--Icono para la pestaña-->
    <link rel="icon" href="img/GhostIcon.png">
    <title>Water's Store</title>
</head>

<body>
    <!--Este script ↓↓↓ impide usar el clic derecho en la pagina, un script sencillo pero util-->
    <script>
        document.oncontextmenu = function(){
            return false
        }
    </script>

    <!--Se invoca al script para agregar texto al momento de que copian algo-->
    <script src="js/txtcopy.js"></script>

    <header class="header">
        <!--LOGO aqui-->
        <a href="otherindex.php">
            <img class="header__logo" src="img/LogoBeta.png" alt="Logo">
        </a>
        <!--
            //Antiguo "Logo" temporal, reemplazado por un imagen en lugar de texto y una imagen
            <a href="index.html"><img src="GhostIcon.png" width="9%"><h1>Water's Store</h1></a>
        -->
    </header>

    <nav class="barra-nav">
        <!--No es necesario establecer el tamaño de cada imagen, desde estilos con su correspondiente clase esta declarado eso c:-->
        <!--OJO: SE REQUIERE INTERNET PARA CARGAR LOS ICONOS DE CADA APARTADO-->
        <a class="barra-nav__link " href="otherindex.php"><img class="alinearImg" alt="Tienda" src="img/shopping-bag.png"/> Tienda</a>
        <a class="barra-nav__link " href="soporte.php"><img class="alinearImg" alt="Support" src="img/support.png"/> Soporte</a>
        <?php
        @$verificar = $_SESSION['verify'];
        if($verificar == "true"){
        ?>
            <a class="barra-nav__link barra-nav__link--active" href="cart.php"><img class="alinearImg" src="img/shopping-cart-selected.png" alt="carrito"> Carrito</a>
            <a class="barra-nav__link " href="logout.php"><img class="alinearImg" src="img/enter.png" alt="logout"> Log out</a>
        <?php
        } else { ?>
            <a class="barra-nav__link " href="register.php"><img class="alinearImg" src="img/add-user.png" alt="signup"> Sign up</a>
            <a class="barra-nav__link " href="login.php"><img class="alinearImg" src="img/login.png" alt="login"> Login</a>
        <?php
        }
        ?>
    </nav>

    <main class="contenido">
        <?php
        @$verificar = $_SESSION['verify'];
        if($verificar == "true"){
            if($idcarrito != 0){ ?>
                <br>
                <h1>Articulos en tu carrito</h1>
                <br>
                <table style="border-collapse: collapse; height: 100%; width: 100%;"  border="5"  bordercolor="#1FC52E">
                    <thead>
                        <th>ID</th>
                        <th>Articulo</th>
                        <th>Precio</th>
                        <th>Cantidad en carrito</th>
                        <th>Total a pagar</th>
                    </thead>
                    <tbody>
                    <?php
                    $sql = new PDO('mysql:host=localhost;dbname=water_store','root','');
                    foreach($sql->query("SELECT * FROM producto WHERE id = '{$idcarrito}'") as $row){ ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['articulo']?></td>
                            <td>$<?php echo $row['precio']?></td>
                            <td><?php echo $cantcarrito?></td>
                            <td>$<?php echo $tot = $row['precio']*$cantcarrito ?></td>
                        </tr>
                    <?php
                    } ?>
                    </tbody>
                </table>
                <form action="otherindex.php">
                    <br>
                    <input type="submit" class="formulario__submit" value="Seguir comprando">
                </form>
                <form action="vendeproducto.php">
                    <br>
                    <input type="hidden" name="cod" value="<?php$idcarrito?>">
                <input type="submit" class="formulario__submit" value="proceder a comprar">
                </form>
            <?php
            } else { ?>
            <br><br><br><br><h1>Tu carrito esta vacio!</h1><br><br><br>
        <?php
            }
        } else { ?>
            <br><br><br><br><h1>Lo sentimos mucho pero aun no puedes</h1><h1>acceder a esta seccion</h1>
            <center><h3>Volver al <a href="otherindex.php">inicio</a></h3></center>
            <center><img src="img/SomethingWrong.png" class="soporte__img" alt="wrongwrong"></center>
        <?php
        } ?>
    </main>

    <footer class="footer">
        <p class="footer__text">
            <script>
                    var rand
                    rand = Math.round(Math.random()*50000)
                    document.write("Con un total de "+rand+" vistas esta semana!!")
            </script>
        </p>
        <p class="footer__text"><img src="img/GhostIcon.png" alt="boo" class="alinearImg"> TheWaterBoo - Todos los derechos reservados 2022. <img src="img/GhostIcon.png" alt="boo" class="alinearImg"></p>
    </footer>
    
</body>

</html>
