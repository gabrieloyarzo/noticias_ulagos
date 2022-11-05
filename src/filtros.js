// Filtro por titulo

function filtrar_titulo() {

    let titulo = document.getElementById("buscar__titulo").value
    let lista_titulos = document.getElementsByClassName("noticia__titulo")

    for (let idx = 0; idx < lista_titulos.length; idx++) {
        const elm = lista_titulos[idx];
        document.querySelectorAll(".noticia")[idx].style.display = elm.innerText.toUpperCase().indexOf(titulo.toUpperCase()) > -1 ? "" : "none"
    }
}

document.getElementById("buscar__titulo").addEventListener("keyup", filtrar_titulo)

// Filtro por categoria

function filtrar_categoria() {

    let categoria = document.getElementById("buscar__categoria").value
    let lista_categorias = document.getElementsByClassName("noticia__categoria")

    for (let idx = 0; idx < lista_categorias.length; idx++) {
        const elm = lista_categorias[idx];
        document.querySelectorAll(".noticia")[idx].style.display = categoria == elm.innerText ? "" : "none"
    }
}

document.getElementById("buscar__categoria").addEventListener("click", filtrar_categoria)

// Filtro por fecha

function filtrar_fechas() {

    let fecha_menor = document.getElementById("buscar__fecha--menor").value
    let fecha_mayor = document.getElementById("buscar__fecha--mayor").value

    if (fecha_menor == '') {
        alert("Indique la fecha desde:")
    }
    else if (fecha_menor > fecha_mayor) {
        alert("Indique la fecha desde: menor a la fecha hasta:")
    }
    else {
        let lista_fechas = document.getElementsByClassName("noticia__fecha")
        for (let idx = 0; idx < lista_fechas.length; idx++) {
            const elm = lista_fechas[idx];
            document.querySelectorAll(".noticia")[idx].style.display = (elm.innerHTML >= fecha_menor && elm.innerHTML <= fecha_mayor) ? "" : "none"
        }
    }
}

document.getElementById("buscar__fecha--mayor").addEventListener("change", filtrar_fechas)