<?php
    $connection = mysqli_connect('localhost', 'root', '', 'noticias_ulagos');
    $result = mysqli_query($connection, "SELECT u.nombre as nombre, u.apellido as apellido, u.correo as correo, c.nombre as categoria, c.color as color, n.titulo as titulo, n.fecha as fecha, n.descripcion as info from noticia n, categoria c, usuario u where c.nombre = n.nombrec and n.correo = u.correo");

    $conex = mysqli_connect("localhost","root","","noticias_ulagos");
    mysqli_select_db($conex,"noticias_ulagos");
    $date = "SELECT * FROM categoria";
    $resultado = mysqli_query($conex,$date);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Noticias ULAGOS</title>
        <link rel="stylesheet" href="./styles/index.css">
        <script defer src="./src/scripts.js"></script>
</head>
<body>
    
    <header class="header">
        <h1 class="header__titulo">Noticias ULAGOS</h1>
        <a href="./index.php" class="header__home">Inicio</a>
        <a href="./pages/inicio.php" class="header__login">
            <img class="header__person" src="./img/person.png" alt="login">
        </a>
        <a href="./pages/subir_noticia.php" class="header__noticia">
            <img class="header__add" src="./img/add_cicle.png" alt="Subir Noticia">
        </a>
        <img class="header__logo" src="" alt="logo Ulagos">
    </header>
    
    <nav class="buscar">
        <textarea name="titulo" id="buscar__titulo" cols="30" rows="1"></textarea>
        <input id="buscar__fecha--menor" type="date">
        <input id="buscar__fecha--mayor" type="date">
        <select name="categoria" id="buscar__categoria">
            <?php while ($fila=mysqli_fetch_array($resultado)){  ?>
                <option style="background-color: <?php echo $fila[1] ?>" value="<?php echo $fila[0] ?>"><?php echo $fila[0] ?></option>
            <?php  } ?>
        </select>
    </nav>
    
    <?php while ($fila=mysqli_fetch_array($result)) { ?>
        <!--<?php echo $fila['titulo']?>-->
        <article class="noticia">
            <aside class="noticia__aside">
                <h3 class="noticia__nombre"><?php echo $fila['nombre']?></h3>
                <h3 class="noticia__apellido"><?php echo $fila['apellido']?></h3>
                <h3 class="noticia__correo"><?php echo $fila['correo']?></h3>
            </aside>
            <main class="noticia__main">
                <header class="noticia__header">
                    <h2 class="noticia__titulo"><?php echo $fila['titulo']?></h2>
                    <p class="noticia__fecha"><?php echo $fila['fecha']?></p>
                    <p class="noticia__categoria" style="background-color: <?php echo $fila['color']?>"><?php echo $fila['categoria']?></p>
                </header>
                <footer class="noticia__footer">

                    <p class="noticia__texto"><?php echo $fila['info']?></p>
                    <button class="noticia__ir">Ir a la noticia</button>
                </footer>
            </main>
        </article> 
        <?php } ?>
        
    </body>
    </html>