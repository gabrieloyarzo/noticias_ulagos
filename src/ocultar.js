limite = document.getElementsByClassName('noticia').length;

for (i = 0; i <= limite-1; i++){
    text = i.toString()
    boton = i+'button'
    
    
    let hideText = document.getElementById(i);
    let buttonHide = document.getElementById(boton);
    buttonHide.addEventListener('click',toggleText)
    
    function toggleText(){

    hideText.classList.toggle('show'); 
    }


}