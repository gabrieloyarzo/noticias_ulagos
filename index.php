<?php
    $connection = mysqli_connect('localhost', 'root', '', 'noticias_ulagos');
    $result = mysqli_query($connection, "SELECT * from noticia");

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
        <select onClick="cambio_busqueda($('buscar__tipos').options.selectedIndex)" name="tipos" id="buscar__tipos">
            <option value="categoria">Categoria</option>
            <option value="titulo">Titulo</option>
            <option value="fecha">Fecha</option>
        </select>
    </nav>
    
    <?php while ($fila=mysqli_fetch_array($result)) { ?>
        
        <article class="noticia">
            <aside class="noticia__aside">
                <h3 class="noticia__autor"><?php echo $fila['titulo']?></h3>
            </aside>
            <main class="noticia__main">
                <header class="noticia__header">
                    <h2 class="noticia__titulo"><?php echo $fila['titulo']?></h2>
                    <p class="noticia__fecha"><?php echo $fila['fecha']?></p>
                </header>
                <footer class="noticia__footer">

                    <p class="noticia__texto"><?php echo $fila['descripcion']?></p>
                    <button class="noticia__ir">Ir a la noticia</button>
                </footer>
            </main>
        </article> 
        <?php } ?>
        
    </body>
    </html>