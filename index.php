<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="
    Empresa de transporte a empresas, escuelas, viajes especiales 
    (sociales, recreativos, etc), dentro del área metropolitana de 
    Monterrey. Estamos comprometidos con la calidad de nuestros clientes, 
    atención personalizada para adaptarnos a las necesidades que requiera 
    y así ofrecer la mejor propuesta de trabajo. ">
    <meta name="author" content="Perla Holguín">
    <title>PROBUS | Una empresa de Transportes Guevara Coronado S.A. de C.V. | Empresa de transporte a empresas, escuelas y viajes especiales. </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/icons/fav.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/simpletextrotator.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <!--animaciones  para la página-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <a href="https://wa.me/528110247316?text=Déjanos%20tu%20mensaje" class="fab fa-whatsapp whats"></a>

    <section id="intro">
        <div id="nav">
            <nav class="navbar yellow container">

                <ul class="navbar justify-content-xs-end">
                    <li class="nav-item">

                        <img src="images/icons/Recurso12.png" alt="logotipo de enlaces probus" class="logo oculto-logo-lg logo-width" style="padding: 20px 0 8px 0;">

                        <a class="nav-link oculto-more-xs" style="cursor:default;">
                            <span>MÁS DE 10 AÑOS NOS RESPALDAN</span>
                        </a>
                        <a class="nav-link oculto-email-lg" href="tel:8110247316">

                            <span>
                                <i class="fas fa-phone"></i>
                                Llamar
                            </span>

                        </a>
                        <a href="mailto:ventas@enlacesprobus.com.mx" class="nav-link oculto-email-lg">
                            <span>
                                <i class="fas fa-envelope"></i>
                                E-mail
                            </span>
                        </a>

                    </li>
                </ul>

            </nav>
        </div>

        <div class="navbar-navegar">
            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="logo-espacio">
                            <img src="images/icons/Recurso12.png" alt="logo" class="logo logo-oculto-xs">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <nav id="main-nav" class="main-nav">

                            <ul class="navegar-pagina">
                                <li class="navegar-pagina-item">
                                    <a href="mailto:ventas@enlacesprobus.com.mx" class="menu-link oculto-email-xs">
                                        <i class="fas fa-envelope"></i>
                                        ventas@enlacesprobus.com.mx
                                    </a>

                                </li>

                            </ul>


                        </nav>
                    </div>

                </div>

            </div>
        </div>



        <div class="container ">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <h1>Servicio de transporte en Monterrey <br> </h1>
                    <h3 class="subt">
                        <span class="rotate">
                            Transporte a Empresas | Transporte a Escuelas | Transporte de Viajes especiales
                        </span>
                    </h3>

                    <div class="row centrar">
                        <a href="tel:8110247316"> <button class="btn-1 " data-aos="fade-left" data-aos-duration="1800"> LLÁMANOS</button></a>
                    </div>
                </div>

                <div class="col-xs-12 contacto col-sm-12 col-md-5 ml-auto oculto-1">
                    <h1 class="white text-contact">CONTÁCTANOS</h1>
                    <p class="white text-contact-p">Será un gusto ponernos en contacto contigo</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contact-form" method="post" role="form">
                        <div id="mensajeErr-Status" class="correct"></div>
                        <div class="ajax-hidden">
                            <!---->
                            <div class="form-group">
                                <label class="sr-only" for="c_name">Nombre</label>
                                <input type="text" id="c_name" class="form-control" name="c_name" placeholder="Nombre">
                                <div id="nombre-status" class="status-fields"></div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="c_phone">Teléfono </label>
                                <input type="tel" id="c_phone" class="form-control" name="c_phone" placeholder="Teléfono">
                                <div id="telefono-status" class="status-fields"></div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="c_email">E-mail </label>
                                <input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
                                <div id="email-status" class="status-fields"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Mensaje"></textarea>
                                <div id="mensaje-status" class="status-fields"></div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="c_terms" id="cterms" class="form-check-input">
                                <label for="cterms" class="form-check-label">Acepto Política de Privacidad</label>

                            </div>
                            <div id="terms-status" class="status-fields"></div>

                            <input type="submit" value="Enviar" id="btn-ajax" class="btn-enviar" name="btn-ajax">
                            <input type="hidden" name="ajax">
                        </div>
                        <div class="ajax-response"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="envios">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 envios-section text-center">
                    <h2 class="envios2-title">Prestamos servicio continuo o por evento </h2>
                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-1"></div>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="images/icons/Recurso3.png" alt="" class="img-responsive img-servicios" width="65">
                    <h3 class="white text-center">Empresas</h3>
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="images/icons/Recurso2.png" alt="" class="img-responsive img-servicios" width="65">
                    <h3 class="white text-center">Escuelas</h3>
                </div>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="images/icons/hoteles.png" alt="" class="img-responsive img-servicios" width="65">
                    <h3 class="white text-center">Hoteles</h3>
                </div>
                <div class="col-6 col-sm-6 col-md-2">
                    <img src="images/icons/construccion.png" alt="" class="img-responsive img-servicios" width="65">
                    <h3 class="white text-center">Construcción</h3>
                </div>
                <div class="col-6 col-sm-6 col-md-2">
                    <img src="images/icons/Recurso1.png" alt="" class="img-responsive img-servicios" width="65">
                    <h3 class="white text-center">Viajes especiales</h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-1"></div>

            </div>
        </div>
    </section>

    <section class="titulo-servicios container" data-aos="fade-up">
        <h2 class="text-center">Nuestro Servicio</h2>
        <hr style="border: 2px solid rgba(224, 49, 50, 1); width:40%; margin-bottom: 15px;">

        <div class="row">
            <div class="col-xs-12 col-md-2"></div>
            <div class="col-xs-12 col-md-8">
                <span class="subtitulo-servicios ">
                    <span class="subtitulo-servicios" style="width:60%;">
                        Estamos comprometidos con la calidad de nuestro trabajo por la cual Ofrecemos
                        a nuestros clientes atención personalizada para adaptarnos a las necesidades
                        que requiera y así, ofrecer la mejor propuesta de trabajo
                    </span>
                </span>
            </div>
            <div class="col-xs-12 col-md-2"></div>
        </div>
    </section>

    <!--Servicios sección-->
    <section class="servicios" data-aos="fade-up" data-aos="fade-up" data-aos-duration="1800">

        <div class="container">

            <div class="row justify-content-xs-center">
                <div class="col-xs-12 col-md-4  services-padding ">
                    <img src="images/icons/Recurso4.png" alt="imagen-ProBus" width="60" class="oculto imagen-servicios">
                    <h5 class="transporte-service">Diseño y elaboración de rutas</h5>

                </div>

                <div class="col-xs-12 col-md-4 services-padding " data-aos="fade-up" data-aos-duration="1300">
                    <img src="images/icons/Recurso5.png" alt="imagen-ProBus" width="60" class="oculto imagen-servicios">
                    <h5 class="transporte-service">Puntualidad </h5>

                </div>

                <div class="col-xs-12 col-md-4 services-padding">
                    <img src="images/icons/Recurso6.png" alt="imagen-ProBus" width="60" class="oculto imagen-servicios">
                    <h5 class="transporte-service">Supervisión</h5>
                </div>

            </div>

            <div class="row">
                <a href="#contact-form" class="btn-5">Solicita tu servicio</a>
            </div>
        </div>
    </section>

    <!--Slider-->
    <section class="ventajas">
        <div class="container owl-carousel owl-theme">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 oculto-med-arriba">
                    <div class="content-Unidad-fisica">
                        <h2 class="text-left red">TRANSPORTE EJECUTIVO</h2>
                        <hr style="border: 2px solid rgb(145, 129, 123, 1); width:60%; margin-bottom: 15px; margin-left: 0;">

                        <img src="images/icons/camion-landing.png" alt="" class="img-responsive">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="content-Unidades">
                        <h2 class="text-left white">NUESTRAS UNIDADES</h2>
                        <hr style="border: 2px solid rgba(224, 49, 50, 1); width:60%; margin-bottom: 15px; margin-left: 0;">

                        <h5 class="text-left white">TOYOTA HIACE</h5>

                        <ul class="white" style="padding: 0;">
                            <li><span>-</span> Asientos tapizados y acojinados</li>
                            <li><span>-</span> Vidrios Polarizados</li>
                            <li><span>-</span> Sistema de localización</li>
                            <li><span>-</span> Identificación de ruta</li>
                            <li><span>-</span> Seguro con cobertura amplia</li>
                            <li><span>-</span> Seguro de viajero</li>
                            <li><span>-</span> Piso de linoleum</li>
                        </ul>

                        <a href="#contact-form" class="btn-5">Solicita tu Cotización</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 oculto-med-abajo">
                    <div class="content-Unidad-fisica">
                        <h2 class="text-left red">TRANSPORTE EJECUTIVO</h2>
                        <hr style="border: 2px solid rgb(145, 129, 123, 1); width:60%; margin-bottom: 15px; margin-left: 0;">

                        <img src="images/icons/camion-landing.png" alt="" class="img-responsive">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 oculto-med-arriba">
                    <div class="content-Unidad-fisica">
                        <h2 class="text-left red">TRANSPORTE EJECUTIVO</h2>
                        <hr style="border: 2px solid rgb(145, 129, 123, 1); width:60%; margin-bottom: 15px; margin-left: 0;">

                        <img src="images/icons/bus-landing.png" alt="" class="img-responsive">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="content-Unidades">
                        <h2 class="text-left white">NUESTRAS UNIDADES</h2>
                        <hr style="border: 2px solid rgba(224, 49, 50, 1); width:60%; margin-bottom: 15px; margin-left: 0;">

                        <h6 class="text-left white">Unidades Panorámicas Mercedes Benz</h6>

                        <ul class="white" style="padding: 0;">
                            <li><span>-</span> Asientos tapizados y acojinados</li>
                            <li><span>-</span> Cortinas.</li>
                            <li><span>-</span> Sistema de localización móvil</li>
                            <li><span>-</span> Salidas de emergencia</li>
                            <li><span>-</span> Seguro con cobertura amplia</li>
                            <li><span>-</span> Seguro de viajero</li>
                            <li><span>-</span> Piso de linoleum</li>
                        </ul>

                        <a href="#contact-form" class="btn-5">Solicita tu Cotización</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 oculto-med-abajo">
                    <div class="content-Unidad-fisica">
                        <h2 class="text-left red">TRANSPORTE EJECUTIVO</h2>
                        <hr style="border: 2px solid rgb(145, 129, 123, 1); width:60%; margin-bottom: 15px; margin-left: 0;">

                        <img src="images/icons/bus-landing.png" alt="" class="img-responsive">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Slider-->

    <section class="cobertura">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <h2 class="text-center">Nuestros Operadores</h2>
                    <hr style="border: 2px solid rgba(224, 49, 50, 1); width:40%; margin-bottom: 25px;">

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-2"></div>
                <div class="col-xs-12 col-md-8">
                    <p class="text-center">
                        En Enlaces Probus nos preocupamos por que nuestro staff de operadores se
                        encuentre comprometido con ofrecerle la mejor experiencia de servicio durante
                        su viaje, y es por eso que nuestros operadores están:
                    </p>
                </div>
                <div class="col-xs-12 col-md-2"></div>
            </div>



            <div class="row" data-aos="fade">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <img src="images/icons/Recurso7.png" alt="ProBus - operadores" class="clientes-logo">
                    <h5 class="transporte-service">Altamente Capacitados</h5>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3">
                    <img src="images/icons/Recurso8.png" alt="ProBus - operadores" class="clientes-logo">
                    <h5 class="transporte-service">Debidamente uniformados</h5>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3">
                    <img src="images/icons/Recurso9.png" alt="ProBus - operadores" class="clientes-logo">
                    <h5 class="transporte-service">Capacitación continua</h5>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3">
                    <img src="images/icons/Recurso10.png" alt="ProBus - operadores" class="clientes-logo">
                    <h5 class="transporte-service">Amabilidad y Cortesía</h5>
                </div>
                <!--/col-->
            </div>
            <!--/row-->
        </div>
        <!--/container-->
    </section>

    <section class=" mostrar-1 text-center ">
        <div class="container">

            <div class="row justify-content-center">
                <div class="titulo-servicios container">
                    <h2 class="text-center">Contacto</h2>

                    <hr style="border: 2px solid rgba(224, 49, 50, 1); width:20%; margin-bottom: 0px"> <br>
                    <span class="subtitulo-servicios" style="width:60%;">Será un gusto contactarnos contigo.</span>
                    <form style="padding: 30px 20px;" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contact-form2" method="post" role="form">
                        <div class="ajax-hidden">

                            <div class="form-group">
                                <label class="sr-only" for="c_name2">Nombre</label>
                                <input type="text" id="c_name2" class="form-control" name="c_name2" placeholder="Nombre">
                                <div id="nombre-status2" class="status-fields"></div>
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="c_phone2">Teléfono </label>
                                <input type="number" id="c_phone2" class="form-control" name="c_phone2" placeholder="Teléfono">
                                <div id="telefono-status2" class="status-fields"></div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="c_email2">E-mail </label>
                                <input type="email" id="c_email2" class="form-control" name="c_email2" placeholder="E-mail">
                                <div id="email-status2" class="status-fields"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="c_message2" name="c_message2" rows="7" placeholder="Mensaje"></textarea>
                                <div id="mensaje-status2" class="status-fields"></div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="c_terms" id="cterms2" class="form-check-input">
                                <label for="cterms2" class="form-check-label" style="color:rgba(0, 74, 115, 1);">Acepto Política de privacidad</label>
                            </div>
                            <div id="terms-status2" class="status-fields"></div>

                            <button type="submit" class="btn-enviar" id="btn-ajax2">
                                ENVIAR
                            </button>
                            <div id="mensajeErr-Status2" class="correct"></div>
                            <input type="hidden" name="ajax2">
                        </div>
                        <div class="ajax-response"></div>
                    </form>

                </div>

            </div>
        </div>
    </section>


    <footer>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 text-xs-center text-md-left">
                    <h3 class="footer footer-text oculto">
                        <img src="images/icons/Recurso11.png" width="200" alt="">
                    </h3>
                    <br>
                    <p style="color: rgba(224, 49, 50, 1); font-size: 0.8em;"><b>Una empresa de Transportes Guevara
                            Coronado S.A. de C.V.</b></p>

                    <p class=" footer-text oculto white" style="font-size: 0.9em">
                        Empresa de transporte a empresas, escuelas, viajes especiales
                        (sociales, recreativos, etc), dentro del área metropolitana
                        de Monterrey. Estamos comprometidos con la calidad de nuestros
                        clientes, atención personalizada para adaptarnos a las necesidades
                        que requiera y así ofrecer la mejor propuesta de trabajo.
                    </p>
                    <p class="footer-text oculto white" style="font-size: 0.9em">
                        Enlaces Probus 2019 Todos los derechos reservados.
                        <br>
                        <a class="color ocultar-3e" href="privacidad.html">Política de privacidad</a> |
                        Sitio web creado por <a class="color ocultar-3e" href="http://www.3e-digital.com/" target="_blank">3E-DIGITAL</a>
                    </p>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-6 ml-auto margen-movil2 text-center ">
                    <h3 class="footer footer-text mostrar-imagen-servicios "> <img src="images/icons/Recurso11.png" width="200" alt=""></h3>

                    <br>

                    <div class="justify-content-center">
                        <h2 class="text-center white oculto">Contacto</h2>
                        <hr style="border: 2px solid rgba(224, 49, 50, 1); width:50%; margin-bottom: 0px">

                        <br>

                        <ul class="list-footer">

                            <li>
                                <a class="link" href="mailto:ventas@enlacesprobus.com.mx">
                                    <h5 class="text-left">
                                        <i class="fas fa-envelope"></i>
                                        E-mail
                                        <br>
                                        <span> ventas@enlacesprobus.com.mx</span>
                                    </h5>

                                </a>
                            </li>



                            <li>
                                <a class="link" href="tel:8110247316">
                                    <h5 class="text-left">
                                        <i class="fas fa-phone"></i>
                                        Teléfono
                                        <br>
                                        <span> 81 1024 7316</span>
                                    </h5>


                                </a>
                            </li>

                        </ul>


                        <br> <br>

                        <div class="mostrar-imagen-servicios white">
                            <p class="">Somos una empresa Es un proveedor de servicios de logística internacional y
                                Aduana reconocido a nivel mundial.
                                <br> <br> Ofrecemos los contactos globales y la experiencia para administrar todos
                                los aspectos de sus procesos de envíos internacionales de exportación e importación
                            </p>
                            <p class="peque">
                                Copyright © The Real Network Business 2019, Todos los derechos
                                reservados.
                            </p>
                            <p class=" peque">
                                <a class="color" href="privacidad.html"> Política de
                                    Privacidad
                                </a>
                            </p>
                            <p class="peque">
                                <a class="color" href="http://www.3e-digital.com/" target="_blank">
                                    Diseñado por 3e-Digital
                                </a>
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="js/jquery.simple-text-rotator.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="js/custom.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        $(".rotate").textrotator({
            animation: "dissolve",
            separator: "|",
            speed: 2000
        });
    </script>

</body>

</html>