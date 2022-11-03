<?php
#Conexion a la base de datos
$conex = mysqli_connect("localhost","root","","noticias_ulagos");



if (isset($_POST['send_noticia'])){     
    $titulo = strval(trim($_POST['titleN']));
    $contenido = strval(($_POST['contenido']));
    $categoria = strval(($_POST['tipos']));
    $fecha = strval(($_POST['date']));
    if (strval($titulo) >=1 && strval($contenido) >=1 && strval($categoria) >=1 && strval($fecha) >=1 )
    {
        #termporal para el correo
        $dates = "INSERT INTO noticia (titulo,fecha,descripcion,correo,categoria) values('$titulo','$fecha','$contenido','asdf@gmail.com','$categoria')";
        $result = mysqli_query($conex,$dates);

    }
} 

?>