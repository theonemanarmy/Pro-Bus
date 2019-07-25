/**
 * Menú responsive
 */
var nav = document.getElementById('main-nav');
nav.addEventListener('click', function(){
    'use strict';
    nav.classList.toggle('to-show');
});

/**
 * Carousel de imagenes
 */

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [980,1],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        singleItem : false,

        // Navigation
        navigation : true,
        navigationText : ["prev","next"],
        rewindNav : true,
        scrollPerPage : false,

        //Pagination
        pagination : true,
        paginationNumbers: false
    });
});

/**
 * Validación de formularios con AJAX
 */

 $(function(){
     $('#btn-ajax').click(function () { 
        var url = 'mail/formulario-contacto.php';

        $.ajax({
            type: "POST",
            url: url,
            data: $('#contact-form').serialize(),
            success: function (data) {
                $('#nombre-status').html('');
                $('#telefono-status').html('');
                $('#email-status').html('');
                $('#mensaje-status').html('');
                $('#terms-status').html('');
                $('#mensajeErr-Status').html(data);//muestra los datos del script de PHP
            }
        });

        return false;
     });
 });