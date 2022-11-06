let hideTextjs = document.getElementById('hideTextJs');
let textHide = document.getElementById('hideText');

hideTextjs.addEventListener('click',toggleText);
function toggleText(){

    textHide.classList.toggle('show');

}