<?php
#Conexion a la base de datos
$conexion = mysqli_connect("localhost","root","","noticias_ulagos");
mysqli_select_db($conexion,"noticias_ulagos");



if (isset($_POST['send_noticia'])){     
    $titulo    = strval(trim($_POST['titleN']));
    $contenido = strval(trim($_POST['contenido']));
    $fecha     = strval(trim($_POST['date']));
    $categoria = strval(trim($_POST['tipos']));
    $correo    = strval(trim($_POST['correo']));
    $contra    = strval(trim($_POST['contra']));
    
    $datos = "SELECT nombre FROM usuario where correo = '$correo' and contrasena = '$contra'";
    $resultado = mysqli_query($conexion,$datos);

    if (strval($titulo) >=1 && strval($contenido) >=1 && strval($categoria) >=1 && strval($fecha) >=1 && $resultado)
    {
        #termporal para el correo

        $dates = "INSERT INTO noticia (titulo,fecha,descripcion,correo,nombrec) values('$titulo','$fecha','$contenido','$correo','$categoria')";
        $result = mysqli_query($conexion,$dates);

    }
} 

?>