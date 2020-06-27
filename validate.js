let btnSend = document.getElementById('send');

btnSend.addEventListener('click', (event) => {
    let nombre = document.getElementById('nombre').value;
    let telefono = document.getElementById('telefono').value;
    let correo = document.getElementById('correo').value;
    let check = document.getElementById('check').checked;
    let error = document.getElementById('error')

    //console.log(check)


    if (!check) {
        error.style.display = 'initial'
        event.preventDefault()
        return;
    } else if (nombre.trim() === '' || telefono.trim() === '' || correo.trim() === '') {
        error.style.display = 'initial'
        event.preventDefault()
        return;
    }
});

let button = document.getElementById('button');
let modal = document.getElementById('page-modal');
let cerrar = document.getElementById('cerrar');
let close = document.getElementsByClassName('modal-close')[0];

button.onclick = function () {
    modal.style.display = 'block';
}
cerrar.onclick = function(){
    modal.style.display = 'none';
}
close.onclick = function () {
    modal.style.display = 'none';
}