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
    <form class="noticia" method="POST">
        <input class="noticia__titulo" name="titleN" type="text" placeholder="Titulo de la Noticia">
        <input type="text" name="contenido" placeholder="Información de la Noticia" class="noticia__info">
        <div class="noticia__opcion">
            <input type="date" name="date" class="noticia__fecha">
            <select name="tipos" name="tipos" id="buscar__tipos">

            <?php while ($fila=mysqli_fetch_array($result)){  ?>

                <option style="background-color: <?php echo $fila[1] ?>" value="<?php echo $fila[0] ?>"><?php echo $fila[0] ?></option>

            <?php  } ?>
            </select>
        </div>
        <input type="submit" name="send_noticia" class="noticia__enviar" value="Subir Noticia">
    </form>
</body>
</html>