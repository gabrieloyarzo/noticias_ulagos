






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias ULAGOS</title>
    <link rel="stylesheet" href="./styles/index.css">
    <script defer src="./scripts.js"></script>
</head>
<body>

    <header class="header">
        <h1 class="header__titulo">Noticias ULAGOS</h1>
        <a href="#" class="header__home">Inicio</a>
        <a href="#" class="header__login">
            <img class="header__foto" src="" alt="login">
        </a>
        <img class="header__logo" src="" alt="logo Ulagos">
    </header>

    <nav class="buscar">
        <textarea name="titulo" id="buscar__titulo" cols="30" rows="1"></textarea>
        <input id="buscar__fecha--menor" type="date">
        <input id="bsucar__fecha--mayor" type="date">
        <select name="categoria" id="buscar__categoria">
            <option value="rellenar">rellenar con la base de datos</option>
            <option value="rellenar">rellenar con la base de datos</option>
        </select>
        <select name="tipos" id="buscar__tipos">
            <option value="categoria">Categoria</option>
            <option value="titulo">Titulos</option>
            <option value="fecha">Fecha</option>
        </select>
    </nav>

    <article class="noticia">
        <aside class="noticia__aside">
            <img src="" alt="foto">
            <h3 class="noticia__autor">Nombre Autor</h3>
        </aside>
        <main class="noticia__main">
            <header class="noticia__header">
                <h2 class="noticia__titulo">Titulo Noticia</h2>
                <p class="noticia__fecha">11/11/11</p>
                <p class="noticia__categoria">evento</p>
            </header>
            <footer class="noticia__footer">
                <p class="noticia__texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam maxime ab placeat facere iusto omnis nemo maiores labore rem nihil!</p>
                <button class="noticia__ir">Ir a la noticia</button>
            </footer>
        </main>
    </article>
    
</body>
</html>