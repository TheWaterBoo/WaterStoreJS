<?php
@session_start();
@$iduser = $_SESSION['user_id'];
if($iduser != 0){
    $_SESSION['verify'] = "true";
}
?>
<!DOCTYPE html>
<html lang="es">
<!--
    Code by TheWaterBoo
    Yep, and 100% certified by one-hundred ghosts (~ 0 u 0 )~
    Copy of the index
-->
<head>
    <!--HTML Usado para ver los productos individuales-->
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

    <!--Se invoca al script para agregar texto al momento de que copian algo-->
    <script src="js/txtcopy.js"></script>

    <nav class="barra-nav">
        <!--No es necesario establecer el tamaño de cada imagen, desde estilos con su correspondiente clase esta declarado eso c:-->
        <!--OJO: SE REQUIERE INTERNET PARA CARGAR LOS ICONOS DE CADA APARTADO-->
        <a class="barra-nav__link " href="otherindex.php"><img class="alinearImg" alt="Tienda" src="img/shopping-bag.png"/> Tienda</a>
        <a class="barra-nav__link " href="soporte.php"><img class="alinearImg" alt="Support" src="img/support.png"/> Soporte</a>
        <?php
        @$verificar = $_SESSION['verify'];
        if($verificar == "true"){
        ?>
            <a class="barra-nav__link " href="cart.php"><img class="alinearImg" src="img/shopping-cart.png" alt="carrito"> Carrito</a>
            <a class="barra-nav__link " href="logout.php"><img class="alinearImg" src="img/enter.png" alt="logout"> Log out</a>
        <?php
        } else { ?>
            <a class="barra-nav__link " href="register.php"><img class="alinearImg" src="img/add-user.png" alt="signup"> Sign up</a>
            <a class="barra-nav__link " href="login.php"><img class="alinearImg" src="img/login.png" alt="login"> Login</a>
        <?php
        }
        ?>
    </nav>

    <main class="Contenido">
        <?php
        $sql = new PDO('mysql:host=localhost;dbname=water_store','root','');
        ?>

        <h1>Camiseta GUN GODZ - God of guns</h1>
        <div class="camisa">
            <img class="camisa__imagen" src="img/producto2.png" alt="camisa gungodz">
            <div class="camisa__contenido">
                <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit sem justo, montes eleifend suscipit bibendum libero aliquet risus mollis quam, felis vehicula congue elementum eros ultrices per neque. Ante mi nibh ultricies ultrices nisl metus sagittis vitae, feugiat euismod mus eros leo a rutrum posuere blandit, nostra accumsan cras proin praesent purus ac. Iaculis et libero consequat ligula himenaeos vitae velit in, sociosqu nulla bibendum eget sed eros blandit tempor, aliquam sociis condimentum fringilla eleifend nisl viverra.
                </p>

                <!--Muchas etiquetas php para un solo if, demasiado confuso pero no es dificil-->
                <?php
                    foreach($sql->query('SELECT * FROM producto WHERE id=3') as $pro3)
                    if($pro3['cantidad']<=0){?>
                        <p><span style="color:#FF0000;text-align:center;">Ya no hay camisas disponibles!!</span></p>
                <?php }else{ ?>
                    <p>Solo quedan <?php echo $pro3['cantidad']?> disponibles</p>
                <?php
                    } ?>
                <form action="vendeproducto.php" method="post" class="formulario">
                    <input type="hidden" name="cod" value="3"> <!--Para identificar el producto y ejecutar su respectivo if-->
                    <?php
                    if($verificar == true){ ?>
                        <input class="formulario__campo" type="number" placeholder="Cantidad" min="1" name="cant">
                        <input class="formulario__submit" type="submit" value="Comprar">
                        <input class="formulario__submit" type="submit" value="Agregar al carrito" name="addcart" onclick="value='Agregado!'">
                    <?php } else { ?>
                        <b><p>Para realizar una compra primero debe <a href="login.php">iniciar sesion</a> o bien <a href="register.php">registrarse</a></p></b>
                        <input class="button__disabled" type="submit" disabled value="Agregar al carrito">
                    <?php
                        } ?>
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__text"><img src="img/GhostIcon.png" alt="boo" class="alinearImg"> TheWaterBoo - Todos los derechos reservados 2022. <img src="img/GhostIcon.png" alt="boo" class="alinearImg"></p>
    </footer>
    
</body>

</html>
