<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias ULAGOS</title>
    <link rel="stylesheet" href="../styles/registrarse.css
    ">
</head>
<body>
    <form class="inicio_sesion" method="post">
        <input class="usuario" name="nombre" type="text" placeholder="Nombre">
        <input class="usuario" name="apellido" type="text" placeholder="Apellido">
        <input class="correo" name="correo" type="email" placeholder="Correo">
        <input class="contrasena" name="contra" type="password" placeholder="Contraseña">
        <div>
            <input class="inicio" type="submit" value="Iniciar Sesión">
            <input class="registrarse" name="sendR" type="submit" value="Registrarse">
        </div>
    </form>
    
    <?php include('conect_registro.php')?>


</body>
</html>