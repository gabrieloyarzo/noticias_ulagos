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
    <form class="noticia">
        <input class="noticia__titulo" type="text" placeholder="Titulo de la Noticia">
        <input type="text" placeholder="Información de la Noticia" class="noticia__info">
        <div class="noticia__opcion">
            <input type="file" accept="image/*" class="noticia__foto">
            <input type="date" class="noticia__fecha">
            <select name="tipos" id="buscar__tipos">
                <option value="categoria">Categoria</option>
                <option value="titulo">Titulos</option>
                <option value="fecha">Fecha</option>
            </select>
        </div>
        <input type="submit" class="noticia__enviar" value="Subir Noticia">
    </form>
</body>
</html>