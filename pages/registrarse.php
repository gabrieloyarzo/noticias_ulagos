<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias ULAGOS</title>
    <link rel="stylesheet" href="../styles/registrarse.css">
    <script defer src="../src/variables.js"></script>
</head>
<body>
<header class="header">
    <img class="header__logo" witdh="50" heigth="50" src="../img/logo-universidad-de-los-lagos.webp" alt="logo Ulagos">
    <a href="../index.php" class="header__home">
    <img class="header__titulo" src="../img/noticias-ulagos.jpeg" alt="Noticias ULagos">
    </a>
    <a href="./subir_noticia.php" class="header__noticia">
        <img class="header__add" src="../img/add_cicle.png" alt="Subir Noticia">
    </a>
    <a href="./registrarse.php" class="header__login">
        <img class="header__person" src="../img/person.png" alt="login">
    </a>
</header>
    <form class="inicio_sesion" method="post">
        <input class="usuario" name="nombre" type="text" placeholder="Nombre">
        <input class="usuario" name="apellido" type="text" placeholder="Apellido">
        <input class="correo" name="correo" type="email" placeholder="Correo">
        <input class="contrasena" name="contra" type="password" placeholder="Contraseña">
        <div>
            <input class="registrarse" name="send_registro" type="submit" value="Registrarse">
        </div>
    </form>
    

    <?php include('../src/conect_registro.php')?>


</body>
</html>