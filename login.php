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
    <link rel="stylesheet" href="css/styles.css" as="style">
    <link rel="stylesheet" href="css/normalize.css" as="style">
    <!--Cool font 8)-->
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
    <!--Icono para la pestaña-->
    <link rel="icon" href="img/GhostIcon.png">
    <title>Water's Store</title>
</head>

<body>

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
        <a class="barra-nav__link " href="register.php"><img class="alinearImg" src="img/add-user.png" alt="signup"> Sign up</a>
        <a class="barra-nav__link barra-nav__link--active" href="login.php"><img class="alinearImg" src="img/login-selected.png" alt="login"> Login</a>
    </nav>

    <main class="contenido__registro">
        <form method="post" action="log_in.php" name="login" onsubmit="return validar();">
            <div class="form-element">
                <h1><p>Inicio de sesion</p></h1>
                <p>Usuario</p>
                <input type="text" name="username" id="username" required />            
                <p>Contraseña</p>
                <input type="password" name="password" id="password" required/>
                <br><br>
                <input type="checkbox" onclick="viewpsw();"> Mostrar contraseña
                <p class="other">No tienes cuenta? entonces <a href="register.php">Registrate</a></p>
            </div>
            <br>
            <center><button type="submit" name="inises" class="boton">Iniciar sesion</button></center>
            <script lang="javascript" src="js/regex.js"></script>
        </form> 
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
