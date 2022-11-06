<?php
    $conex = mysqli_connect('localhost', 'root', '', 'noticias_ulagos');
    mysqli_select_db($conex,"noticias_ulagos");
    $resultado_noticia = mysqli_query($conex, 
    "SELECT u.nombre as nombre, u.apellido as apellido,
     u.correo as correo, c.nombre as categoria, 
     c.color as color, n.titulo as titulo, 
     n.fecha as fecha, n.descripcion as info 
    from noticia n, categoria c, usuario u 
    where c.nombre = n.nombrec and n.correo = u.correo");

    $resultado_categoria = mysqli_query($conex,"SELECT * FROM categoria");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Noticias ULAGOS</title>
        <link rel="stylesheet" href="./styles/index.css">
        <script defer src="./src/filtros.js"></script>
        <script defer src="./src/read_more.js"></script>
</head>
<body>
    
<header class="header">
    <img class="header__logo" witdh="50" heigth="50" src="./img/logo-universidad-de-los-lagos.webp" alt="logo Ulagos">
    <a href="./index.php" class="header__home">
        <img class="header__titulo" src="./img/noticias-ulagos.jpeg" alt="Noticias ULagos">
    </a>
    <a href="./pages/subir_noticia.php" class="header__noticia">
        <img class="header__add" src="./img/add_cicle.png" alt="Subir Noticia">
    </a>
    <a href="./pages/registrarse.php" class="header__login">
        <img class="header__person" src="./img/person.png" alt="login">
    </a>
</header>
    
    <nav class="buscar">
        <input name="titulo" id="buscar__titulo" cols="30" rows="1"></input>
        <p class="buscar__indice">desde:</p>
        <input id="buscar__fecha--menor" type="date">
        <p class="buscar__indice">hasta:</p>
        <input id="buscar__fecha--mayor" type="date">
        <select name="categoria" id="buscar__categoria">
            <?php while ($fila=mysqli_fetch_array($resultado_categoria)){  ?>
                <option style="background-color: <?php echo $fila[1] ?>" value="<?php echo $fila[0] ?>"><?php echo $fila[0] ?></option>
            <?php  } ?>
        </select>
    </nav>

    <?php $varID = 0?>
    <?php while ($fila=mysqli_fetch_array($resultado_noticia)) { ?>
        
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

                <footer class="noticia__footer" id=<?php echo $varID;?>>

                    <!-- En proceso -->                    
                    <p><?php echo $fila['info']?></p>  
                </footer>
            </main>
            
            <!--En proceso-->
            <button class="noticia__ir" id=<?php echo $varID.'button';?>>Ir a la noticia</button>
        
        </article>
         
        <?php $varID = $varID+1; } ?>
        
    </body>
    </html>