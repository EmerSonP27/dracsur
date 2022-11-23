var btnAbrirAccesoAdmin = document.getElementById('btn_abrir_acceso_admin'),     
    overlay = document.getElementById('popup_overlay'),    
    btnCerrarAccesoAdmin = document.getElementById('btn_cerrar_acceso_admin');
       
btnAbrirAccesoAdmin.addEventListener('click', function () {
    overlay.classList.add('active');
});

btnCerrarAccesoAdmin.addEventListener('click', function (e) {
    e.preventDefault();
    overlay.classList.remove('active');
});