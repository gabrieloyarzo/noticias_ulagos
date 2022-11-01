const $ = elm => document.getElementById(elm)
const $$ = elm => document.getElementsByClassName(elm)

function cambio_busqueda(pos) {
    
    if (pos == 1) {
        $("buscar__titulo").style.display = "inline"
        $("buscar__fecha--menor").style.display = "none"
        $("buscar__fecha--mayor").style.display = "none"
        $("buscar__categoria").style.display = "none"
    }
    if (pos == 2) {
        $("buscar__titulo").style.display = "none"
        $("buscar__fecha--menor").style.display = "inline"
        $("buscar__fecha--mayor").style.display = "inline"
        $("buscar__categoria").style.display = "none"
    }
    if (pos == 0) {
        $("buscar__titulo").style.display = "none"
        $("buscar__fecha--menor").style.display = "none"
        $("buscar__fecha--mayor").style.display = "none"
        $("buscar__categoria").style.display = "inline"
    }
}


cambio_busqueda(1)