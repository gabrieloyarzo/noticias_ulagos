<?php

$conex = mysqli_connect("localhost","root","","noticias_ulagos");
mysqli_select_db($conex,"noticias_ulagos");
$date = "SELECT * FROM categoria";
$result = mysqli_query($conex,$date);

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">   
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias ULAGOS</title>
    <link rel="stylesheet" href="../styles/subir_noticia.css">
</head>
<body>
<header class="header">
    <a href="../index.php" class="header__home">
        <h1 class="header__titulo">Noticias ULAGOS</h1>
    </a>
    <a href="./registrarse.php" class="header__login">
        <img class="header__person" src="../img/person.png" alt="login">
    </a>
    <a href="./subir_noticia.php" class="header__noticia">
        <img class="header__add" src="../img/add_cicle.png" alt="Subir Noticia">
    </a>
    <img class="header__logo" witdh="50" heigth="50" src="../img/logo-universidad-de-los-lagos.webp" alt="logo Ulagos">
</header>
    <form class="noticia" method="POST">
        <input required class="noticia__titulo" name="titleN" type="text" placeholder="Titulo de la Noticia">
        <input required type="text" name="contenido" placeholder="Información de la Noticia" class="noticia__info">
        <div class="noticia__opcion">
            <input required type="date" name="date" class="noticia__fecha">
            <select name="tipos" name="tipos" id="buscar__tipos">

            <?php while ($fila=mysqli_fetch_array($result)){  ?>

                <option style="background-color: <?php echo $fila[1] ?>" value="<?php echo $fila[0] ?>"><?php echo $fila[0] ?></option>

            <?php  } ?>
            </select>
        </div>
        <input placeholder="correo" type="email" name="correo" id="noticia__correo">
        <input placeholder="contrasena" type="password" name="contra" id="noticia__contra">
        <input type="submit" name="send_noticia" class="noticia__enviar" value="Subir Noticia">
    </form>
    <?php include('../src/conect_noticia.php'); ?>

</body>
</html>