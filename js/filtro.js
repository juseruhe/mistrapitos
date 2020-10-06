$(function () {
    
    $('.filter').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
        let valor = $(this).attr('data-nombre');
        if (valor == 'todos'){
            $('.cont-work').show('1000');
        }else{
            $('.cont-work').not('.' + valor).hide('1000');
            $('.cont-work').filter('.' + valor).show('1000');
        }
    });

    // variables de los contenedores
    let trabajo = $('#trabajo').offset().top,
        servicio = $('#servicio').offset().top,
        inicio_sesion = $('#sesion').offset().top,
        contacto = $('#contacto').offset().top;

    
    window.addEventListener('resize', function() {
        // las variables del menu
            let trabajo = $('#enlace-trabajo').offset().top,
            servicio = $('#enlace-servicio').offset().top,
            inicio_sesion = $('#enlace-sesion').offset().top,
            contacto = $('#enlace-contacto').offset().top;

            console.log('resize trabajo?', trabajo);
            console.log('resize servicio?', servicio);
            console.log('resize sesion?', inicio_sesion);
            console.log('resize contacto?', contacto);
    });

    $('#enlace-inicio').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        },600);
    });

    $('#enlace-trabajo').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: trabajo -100
        },600);
    });

    $('#enlace-servicio').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: servicio -100
        },600);
    });

    $('#enlace-sesion').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: inicio_sesion -100
        },600);
    });

    $('#enlace-contacto').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: contacto -100
        },600);
    });
});