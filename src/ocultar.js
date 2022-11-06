limite = document.getElementsByClassName('noticia').length;

for (i = 0; i <= limite - 1; i++) {
    text = i.toString()
    boton = i + 'button'


    let hideText = document.getElementById(i)
    let buttonHide = document.getElementById(boton)
    
    buttonHide.addEventListener('click', () => {
        hideText.classList.toggle('show');
        if (hideText.classList.contains('show')) {
            buttonHide.innerHTML = 'Mostrar menos'
        }
        else {
            buttonHide.innerHTML = 'Mostrar más'
        }
    })


}