(function() {
    "use strict";

    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function() {

        var map = L.map('mapa').setView([6.231885, -75.545146], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([6.231885, -75.545146]).addTo(map)
            .bindPopup('<h2>GDLWEBCAMP</h2> <br> Del 10 al 12 de Diciembre <br> Visitanos!')
            .openPopup();

        //Campos Datos de Usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //Campos input pases
        var pases_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        //Botones y Divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        // Extras
        var camisas = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');

        botonRegistro.disabled = true;

        if (document.getElementById('calcular')) {

            calcular.addEventListener('click', calcularMontos);

            pase_dia.addEventListener('input', mostrarDias);
            pase_dosdias.addEventListener('input', mostrarDias);
            pase_completo.addEventListener('input', mostrarDias);

            nombre.addEventListener('blur', validarCampos);
            apellido.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarEmail);

            // var formulario_editar = document.getElementsByClassName('editar-registrado');
            // if(formulario_editar.length > 0) {
            //     if(pase_dia.value || pase_dosdias.value || pase_completo.value ) {
            //         mostrarDias();
            //     }
            // }

            function validarCampos() {
                if (this.value === '') {
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = "¡Este campo es obligatorio!";
                    errorDiv.style.color = 'red';
                    this.style.border = '1px solid red';
                    errorDiv.style.border = '1px solid red';
                }
                else {
                    errorDiv.style.display = 'none';
                    this.style.border = '1px solid #969696';
                }
            }

            function validarEmail() {
                if (this.value.indexOf("@") > -1) {
                    errorDiv.style.display = 'none';
                    this.style.border = '1px solid #969696';
                }
                else{
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = "¡Debe de tener al menos un @!";
                    errorDiv.style.color = 'red';
                    this.style.border = '1px solid red';
                    errorDiv.style.border = '1px solid red';
                }
            }


            function calcularMontos(event) {
                event.preventDefault();
                if(regalo.value === ''){
                    alert("Debes elegir un Regalo!");
                    regalo.focus();
                }
                else{
                    var boletosDia = parseInt(pase_dia.value, 10)|| 0,
                        boletos2Dias = parseInt(pase_dosdias.value, 10)|| 0,
                        boletosCompletos = parseInt(pase_completo.value, 10)|| 0,
                        cantCamisas = parseInt(camisa_evento.value, 10)|| 0,
                        cantEtiquetas = parseInt(etiquetas.value, 10)|| 0;

                    var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletosCompletos * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

                    var listadoProductos = [];

                    if (boletosDia >= 1) {
                        listadoProductos.push(boletosDia + ' Pase por día');
                    }
                    if (boletos2Dias >= 1) {
                        listadoProductos.push(boletos2Dias + ' Pase por 2 días');
                    }
                    if (boletosCompletos >= 1) {
                        listadoProductos.push(boletosCompletos + ' Pase Completos');
                    }
                    if (cantCamisas >= 1) {
                        listadoProductos.push(cantCamisas + ' Camisas');
                    }
                    if (cantEtiquetas >= 1) {
                        listadoProductos.push(cantEtiquetas + ' Etiquetas');
                    }
                    lista_productos.style.display ="block";
                    lista_productos.innerHTML = '';
                    for (var i = 0; i < listadoProductos.length; i++) {
                        lista_productos.innerHTML += listadoProductos[i] + '<br/>';
                    }
                    suma.innerHTML = "$ " + totalPagar.toFixed(2);

                    botonRegistro.disabled = false;
                    document.getElementById('total_pedido').value = totalPagar;
                }
            }

            function mostrarDias() {
                var boletosDia = parseInt(pase_dia.value, 10)|| 0,
                    boletos2Dias = parseInt(pase_dosdias.value, 10)|| 0,
                    boletosCompletos = parseInt(pase_completo.value, 10)|| 0;

                var diasElegidos = [];

                if (boletosDia > 0) {
                    diasElegidos.push('viernes');
                }
                if (boletos2Dias > 0) {
                    diasElegidos.push('viernes', 'sabado');
                }
                if (boletosCompletos > 0) {
                    diasElegidos.push('viernes', 'sabado', 'domingo');
                }

                for (var i = 0; i < diasElegidos.length; i++) {
                    document.getElementById(diasElegidos[i]).style.display = "block";
                }
                // if(diasElegidos.length == 0 ) {
                //   var todosDias = document.getElementsByClassName('contenido-dia');
                //   for(var i = 0; i < todosDias.length; i++) {
                //      todosDias[i].style.display = 'none';
                //   }
                // }
            }
        }

    });//DOM CONTENT LOADED
})();

$(function(){

    //Manejo de Lettering en el Nombre del Sitio
    $('.nombre-sitio').lettering();

    //Agregar clase a Menu
    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

    //Menu fijo
    var windowheight = $(window).height();
    var barraAltura = $('.barra').innerHeight();
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > windowheight) {
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barraAltura+'px'});
        }
        else{
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
        }
    });

    //Menu Responsive
    $('.menu-movil').on('click', function(){
        $('.navegacion-principal').slideToggle();
    });

    //Programa de conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');
    $('.menu-programa a').on('click', function(){
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;
    });

    //Animaciones para los números de .resumen-evento
    var resumenLista = $('.resumen-evento');
    if (resumenLista.length > 0) {
        $('.resumen-evento').waypoint(function(){
            $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 1200);
            $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 }, 1200);
            $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 }, 1500);
            $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9 }, 1500);
        },{
            offset: '60%'
        });
    }


    //Animaciones para los números de .cuenta-regresiva
    $('.cuenta-regresiva').countdown('2018/12/10 09:00:00', function(event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

    //Colorbox
    $('.invitado-info').colorbox({inline:true, width:"50%"});
    $('.boton_newsletter').colorbox({inline:true, width:"50%"});

});
