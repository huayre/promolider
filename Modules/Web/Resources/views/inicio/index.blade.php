@extends('web::layouts.master')

@section('banner')

<!-- header -->
<div class="header">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo-container">
                    <img class="logo" src="{{asset('web\img\img\logo2-net-menu.png')}}">
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('web::inicio.index') }}">Inicio</a></li>
                        <li><a href="{{ route('web::nosotros.index') }}">Quiénes Somos</a></li>
                        <li><a href="{{ route('web::productos.index') }}">INFOPRODUCTOS</a></li>
                        <!--	<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">UNIVERSIDAD <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="typography.html">Short Codes</a></li>-->
                        <!--	</ul>
                      </li>--><li><a href="https://promolider.org/universidad/index.php" target="_blank">UNIVERSIDAD</a></li>
                        <li><a href="{{route('login')}}" target="_blank">INICIAR SESION</a></li>
                        <li><a href="{{ route('web::contacto.index') }}">Contacto</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '233950517442703');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=233950517442703&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->
<!-- //header -->

<div class=" banner">
    <div class="wthree-different-dot">
        <div class="banner-top">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides callbacks callbacks1" id="slider4">
                            <li>
                            <div class="wthree-different-dot">
                                <div class="banner_text">
                                <div class="container">
                                    <span>red </span>
                                    <h2>Educativa</h2>
                                    <div class="more-button text-center">
                                        <a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#myModal1">Leer más</a>
                                    </div>
                                    <div class="thim-click-to-bottom">
                                        <a href="#welcome" class="scroll">
                                            <i class="fa  fa-chevron-down"></i>
                                        </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="wthree-different-dot">
                                <div class="banner_text">
                                <div class="container">
                                    <span>red</span>
                                    <h3>empresarial</h3>
                                    <div class="more-button text-center">
                                        <a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#myModal1">leer más</a>
                                    </div>
                                    <div class="thim-click-to-bottom">
                                        <a href="#welcome" class="scroll">
                                            <i class="fa  fa-chevron-down"></i>
                                        </a>
                                    </div>
                                </div>
                                </div>
                                </div>
                            </li>
                            <li>
                            <div class="wthree-different-dot">
                                <div class="banner_text">
                                <div class="container">
                                    <span>red</span>
                                    <h3>monetizada</h3>
                                    <div class="more-button text-center">
                                        <a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#myModal1">Leer más</a>
                                    </div>
                                    <div class="thim-click-to-bottom">
                                        <a href="#welcome" class="scroll">
                                            <i class="fa  fa-chevron-down"></i>
                                        </a>
                                    </div>
                                </div>
                                </div>
                                </div>
                            </li>
                            <li>
                            <div class="wthree-different-dot">
                                <div class="banner_text">
                                <div class="container">
                                    <span>red</span>
                                    <h3>inversión</h3>
                                    <div class="more-button text-center">
                                        <a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#myModal1">leer más</a>
                                    </div>
                                    <div class="thim-click-to-bottom">
                                        <a href="#welcome" class="scroll">
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                </div>
                                </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <div class="clearfix"></div>
</div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4>Promolíder</h4>
                <img src="{{asset('web/img/images/b2.jpg')}}" alt=" " class="img-responsive">
                <h5>Educación online y negocio. </h5>
                <p>Somos  la primera red educativa que integra un sistema de ganacias dirigido a personas que quieran cambiar sus vidas, desaprendiendo creencias limitantes y reaprendiendo nuevos patrones que lo lleven al èxito y empoderen para enseñar a otros con estartegias altamente comprobadas como lo es el Coaching, la PNL, La Neurociencia e Inteligencia Emocional entre otros, con la oportunidad de obtener un modelo de negocio que le permita generar ingresos exponenciales extras.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="about" id="Bienvenidos">
    <div class="container">
        <h3> PROMOLÍDER Primera red educativa monetizada</h3>
        <h3><span> Bienvenidos </span> a tu empresa</h3>
        <div class="col-md-6 aboutleft">
            <h3>¿Te imaginas poder ganar dinero mientras te formas, capacitas o te certificas?</h3>
            <p>PROMOLÍDER te ofrece una plataforma educativa online y un sistema de ganancias altamente comprobado, acompañado de un equipo de profesionales e investigadores en las áreas de desarrollo y crecimiento personal, tomando como base el Coaching, la neurociencia y una cartera de cursos, talleres, y diplomados con certificación Universitaria.

            </p>
            <p>Al ser miembro de esta Red, tendrás descuentos de hasta un 50% en todos los infoproductos (cursos, talleres, seminarios, diplomados)  y  ganancias de hasta un 45% de tu red de referidos.</p>
            <p>En PROMOLÍDER hemos unido dos megas tendencias como lo son la industria  del E-learni  con una facturación anual de 51.5 Billones de Dólares  y la industria del Network Marketing con ingresos de 2 Trillones de Dólares al año,  cada día son más las miles de persona  que se unen a esta tendencia</p>
            <p>Y tú, estás dispuestos a dar un cambio en tu vida? educando tu mente, capacitándote con herramientas efectivas y obtener grandes beneficios economicos de por vida. Ingresa hoy mismo.</p>
        </div>
        <div class="col-md-6 aboutright">
            <img src="{{asset('web/img/images/about.jpg')}}">
            <div class="aboutimg">
                <img src="{{asset('web/img/images/aboutimg.jpg')}}">
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- welcome -->

<!-- services -->
<div class="services" id="services">
    <div class="container">
        <div class="w3l-heading">
            <h3>Qué hacemos</h3>
        </div>
        <div class="services-grids">
            <div class="col-md-3 wthree-services-grid">
                <div class="wthree-services-icon">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                </div>
                <div class="wthree-services-info">
                    <h5>Educación online</h5>
                    <span></span>
                    <p>Disponible las 24 Horas del día, desde la comodidad de tu hogar u oficina, para que te formes en tu tiempo libre. </p>
                </div>
            </div>
            <div class="col-md-3 wthree-services-grid">
                <div class="wthree-services-icon">
                    <i class="fa fa-clone" aria-hidden="true"></i>
                </div>
                <div class="wthree-services-info">
                    <h5>Certificación Universitaria</h5>
                    <span></span>
                    <p>Contamos con respaldo de universidades reconocidas  a nivel internacional. </p>
                </div>
            </div>
            <div class="col-md-3 wthree-services-grid">
                <div class="wthree-services-icon">
                    <i class="fa fa-sitemap" aria-hidden="true"></i>
                </div>
                <div class="wthree-services-info">
                    <h5>Oportunidad de Negocio</h5>
                    <span></span>
                    <p>Novedoso Plan de Compensación que consolidan tu éxito financiero. </p>
                </div>
            </div>
            <div class="col-md-3 wthree-services-grid">
                <div class="wthree-services-icon">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </div>
                <div class="wthree-services-info">
                    <h5>Variedad de Contenidos</h5>
                    <span></span>
                    <p>Contamos con cursos, talleres, diplomados y especiaizaciones, en plataforma 100% online, certificados universitariamente. </p>
                </div>
            </div>
            <div class="clearfix"> </div>

            <div class="services-bottom-grids">
                <div class="col-md-4 wthree-services-grid">
                    <div class="wthree-services-icon">
                        <i class="fa fa-btc" aria-hidden="true"></i>
                    </div>
                    <div class="wthree-services-info">
                        <h5>Inversión y trading</h5>
                        <span></span>
                        <p>Capacitación actualizada en criptomonedas, inversión en bolsa, tiempo real del Mercado Forex, Motores de inversíon eficiciente. </p>
                    </div>
                </div>
                <div class="col-md-4 wthree-services-grid">
                    <div class="wthree-services-icon">
                        <i class="fa fa-signing" aria-hidden="true"></i>
                    </div>
                    <div class="wthree-services-info">
                        <h5>Sistema de Ganancia</h5>
                        <span></span>
                        <p>Innovador plan de ganancias con 16 forma de beneficiar a nuestros asociados . </p>
                    </div>
                </div>
                <div class="col-md-4 wthree-services-grid">
                    <div class="wthree-services-icon">
                        <i class="fa fa-suitcase" aria-hidden="true"></i>
                    </div>
                    <div class="wthree-services-info">
                        <h5>Premios</h5>
                        <span></span>
                        <p>Viajes nacionales e internacionales en la escala de ascensos. </p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //services -->

<!-- team -->
<div class="team-section">
    <div class="container">
        <div class="w3l-heading">
            <h3>nuestro equipo</h3>
        </div>
        <div class="team-row">
            <div class="col-md-3 team-grids">
                <div class="team-img">
                    <img class="img-responsive" src="{{asset('web/img/images/gio1.jpg')}}" alt="">
                    <div class="captn">
                        <ul class="top-links">
                            <li><a href="https://www.facebook.com/giovany.pernia"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="team-agile">
                    <h4>Giovany Pernia</h4>
                    <p>Coach, CEO, Estratega de expansión y crecimiento, empresario con más de 20 años de reconocida trayectoria, impulsador de negocios rentables y auto sustentable.</p>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="team-img">
                    <img class="img-responsive" src="{{asset('web/img/images/gio2.jpg')}}" alt="">
                    <div class="captn">
                        <ul class="top-links">
                            <li><a href="https://www.facebook.com/freddyalberto.maldonado"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="team-agile">
                    <h4>Freddy Maldonado </h4>
                    <p>Director de formación y expansión, programador neuro líder biodecodificador, coordinador de programa de crecimiemto acelerado .</p>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="team-img">
                    <img class="img-responsive" src="{{asset('web/img/images/t3.jpg')}}" alt="">
                    <div class="captn">
                        <ul class="top-links">
                            <li><a href="https://www.facebook.com/henry.j.fuenmayor.5"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="team-agile">
                    <h4>Henry Rodríguez</h4>
                    <p>Consultor- Estratega Digital, Community Management, Educador y Redacctor Creativo para Redes Sociales.</p>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <div class="team-img">
                    <img class="img-responsive" src="{{asset('web/img/images/t4.jpg')}}" alt="">
                    <div class="captn">
                        <ul class="top-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="team-agile">
                    <h4>Gladys Luján</h4>
                    <p>Coordinador académico, diseñadora instruccional e-learning, planeación y mejora continua con más de doce años de destacada experiencia en el ramo educativo y empresarial.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //team -->

<!-- servicesbottom -->
<!-- Counter -->
<div class="col-md-6 services-bottom">
    <div class="col-md-6 agileits_w3layouts_about_counter_left">
        <div class="countericon">
            <i class="glyphicon glyphicon-tasks" aria-hidden="true"></i>
        </div>
        <div class="counterinfo">
            <p class="counter">436</p>
            <h3>promolíder</h3>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="col-md-6 agileits_w3layouts_about_counter_left">
        <div class="countericon">
            <i class="glyphicon glyphicon-erase" aria-hidden="true"></i>
        </div>
        <div class="counterinfo">
            <p class="counter">147</p>
            <h3>premios</h3>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
    <div class="col-md-6 agileits_w3layouts_about_counter_left">
        <div class="countericon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="counterinfo">
            <p class="counter">10</p>
            <h3>años de experiencia</h3>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="col-md-6 agileits_w3layouts_about_counter_left">
        <div class="countericon">
            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
        </div>
        <div class="counterinfo">
            <p class="counter">150</p>
            <h3>administración</h3>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //Counter -->
<!-- Clients -->
<div class=" col-md-6 clients">
    <h3>Testimonios</h3>
    <span></span>
    <section class="slider">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <p>Luego de estar por varias empresas de mercadeo en red, entendí que sin la formación y la capacitación constante, no hay cambios. En PROMOLÍDER encontre la combinación perfecta: formación y mi propio negocio. .</p>
                    <div class="client">
                        <img src="{{asset('web/img/images/c1.jpg')}}" alt="">
                        <h5>Santa Cruz Vidarte</h5>
                        <div class="clearfix"> </div>
                    </div>
                </li>
                <li>
                    <p>Me costaba mucho relacionarme con otras personas.  Con mi formaciòn en Coaching descubrí mis creencias limitantes y me ayudo a despertar mi talento, cada día tengo más amigos.  .</p>
                    <div class="client">
                        <img src="{{asset('web/img/images/c2.jpg')}}" alt="">
                        <h5>Vannesa Vega</h5>
                        <div class="clearfix"> </div>
                    </div>
                </li>
                <li>
                    <p>Cuando me hablaron de PROMOLÍDER, lo primero que pense fue en ventas, productos y cajas, jajajaja. Tener mi negocio de capacitacion y ganar dinero por cambiar mi forma de pensar, es todo lo que estaba buscando... .</p>
                    <div class="client">
                        <img src="{{asset('web/img/images/c3.jpg')}}" alt="">
                        <h5>Chris Mariangel Tigrera</h5>
                        <div class="clearfix"> </div>
                    </div>
                </li>
                <li>

                    <p>Para mi, estar actualizado con la información a través la capacitacion, es tener poder ante los demás .</p>
                    <div class="client">
                        <img src="{{asset('web/img/images/c4.jpg')}}" alt="">
                        <h5>Reinaldo Meza</h5>
                        <div class="clearfix"> </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</div>
<div class="clearfix"> </div>
<!-- //Clients -->
<div class="statbottom">
    <div class="container">
        <h3>El propósito de Promolíder es formar Líderes de Negocio. </h3>
        <p>Nuestro CEO, Coach Giovany Pernia mantiene el objetivo claro de construir la red educativa monetizada con personas que deseen cambiar su forma de pensar, manteniendo la llama ardiente de la libertad financierea, por ello te invita a suscribirte en nuestros canales informativos.  .</p>
        <div class="more-button text-center">
            <a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#myModal1">leer más </a>
        </div>
    </div>
</div>
<!-- //servicesbottom -->

<!-- subscribe section -->
<section class="subscribe" id="subscribe">
    <div class="container">
        <h3>Suscribete </h3>
    </div>
    <form action="#" method="post" class="newsletter">
        <input class="email" type="email" placeholder="Enter Your Email..." required="">
        <input type="submit" class="submit" value="subscribe">
    </form>
</section>
<!-- //subscribe section -->

{{View::make('web::layouts.footer')}}
@endsection



