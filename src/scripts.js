// Filtro por titulo

function filtrar_titulo () {

    let titulo = document.getElementById("buscar__titulo").value
    let lista_titulos = document.getElementsByClassName("noticia__titulo")

    for (let idx = 0; idx < lista_titulos.length; idx++) {
        const elm = lista_titulos[idx];
        document.querySelectorAll(".noticia")[idx].style.display = elm.innerText.toUpperCase().indexOf(titulo.toUpperCase()) > -1 ? "" : "none";
        
    }
}

document.getElementById("buscar__titulo").addEventListener("keyup",filtrar_titulo)


// Filtro por categoria


function filtrar_categoria() {
    let categoria = document.getElementById("buscar__categoria").value
    let lista_categorias = document.getElementsByClassName("noticia__categoria")

    for (let idx = 0; idx < lista_categorias.length; idx++) {
        const elm = lista_categorias[idx];
        document.querySelectorAll(".noticia")[idx].style.display = categoria == elm.innerText ? "" : "none";
    }
}

document.getElementById("buscar__categoria").addEventListener("click", filtrar_categoria)