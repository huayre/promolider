@extends('web::layouts.master')
@section('banner')

{{View::make('web::layouts.header')}}
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
                        <li><a href="{{ route('web::inicio.index') }}">Inicio</a></li>
                        <li class="active"><a href="{{ route('web::nosotros.index') }}">Quiénes Somos</a></li>
                        <li><a href="{{ route('web::productos.index') }}">INFOPRODUCTOS</a></li>
                        <!--	<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">UNIVERSIDAD <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="typography.html">Short Codes</a></li>-->
                        <!--	</ul>
                      </li>--><li><a href="https://promolider.org/universidad/index.php" target="_blank">UNIVERSIDAD</a></li>
                        <li><a href="{{ route('web::contacto.index') }}">Contacto</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
    <!-- banner -->
    <div class=" banner banner1">
        <div class="wthree-different-dot1">
            <h2>Quiénes Somos</h2>
        </div>
    </div>
    <!-- //banner -->
    <!-- Modal1 -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Promolíder</h4>
                    <img src="{{asset('web/img/images/4.jpg')}}" class="img-responsive">
                    <h5>Formamos Líderes de negocios de alto impacto. </h5>
                    <p>PROMOLÍDER mantine su plataforma educativa actualizada, con las últimas tendencias en cursos, talleres y diplomados a nivel mundial. Incluye los programas de criptomonedas e inversiones en los mercados de divisa, contando con expertos reconocidos en cada área, para que puedas hacer de esta experiencia un negocio rentable cuando refieres a tus amigos.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal1 -->

    <!-- about -->
    <div class="aboutpage">
        <div class="container">
            <div class="w3l-heading">
                <h3>Quiénes Somos</h3>
            </div>
            <div class="col-md-4 aboutpageleft">
                <h3>Formamos Líderes de Negocios de alto impacato </h3>
                <p>PROMOLÍDER, con más de ocho años en el mercado de la formación y capacitación ha concebido  programas educativos con la intención de profundizar en el desarrollo del potencial emocional del individuo, entendiendo que el bienestar de éste lo compone también su economía, por ello en año 2017  lanza la oportunidad de negocio en la que te capacitas, entrenas, certificas y obtienes ingresos monetarios.</p>
                <div class="more-button">
                    <a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#myModal1">Leer Más</a>
                </div>

            </div>
            <div class="col-md-4 aboutpagemiddle">
                <h3>Bienvenidos</h3>
                <!--<div class="aboutpageicons">  -->
                <!--	<ul>-->
                <!--		<li><a href="#"><i class="fa fa-cloud-upload"></i></a></li>-->
                <!--		<li><a href="#"><i class="fa fa-coffe"></i></a></li>-->
                <!--		<li><a href="#"><i class="fa fa-cub"></i></a></li>-->
                <!--		<li><a href="#"><i class="fa fa-downlo"></i></a></li>-->
                <!--	</ul>-->
                <!--</div>-->
                <p>Para ello PROMOLÍDER ha desarrollado un plan de ganancia eficaz y  práctico, así los miembros de la red  obtienen grandes beneficios económicos rapidamente, con una recuperación de la inversión  al instante con solo referir  a 2 nuevos socios, lo que hace de este plan un verdadero  potencial para alcanzar y consolidar la liberta financiera a corto, mediano y largo plazo.</p>
            </div>
            <div class="col-md-4 aboutpageright">
                <img src="{{asset('web/img/images/aboutpage.jpg')}}" alt="" />
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- about -->

    <!-- servicesbottom -->
    <!-- Counter -->
    <div class="col-md-6 services-bottom">
        <div class="col-md-6 agileits_w3layouts_about_counter_left">
            <div class="countericon">
                <i class="glyphicon glyphicon-tasks" aria-hidden="true"></i>
            </div>
            <div class="counterinfo">
                <p class="counter">436</p>
                <h3>Promolíder</h3>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-6 agileits_w3layouts_about_counter_left">
            <div class="countericon">
                <i class="glyphicon glyphicon-erase" aria-hidden="true"></i>
            </div>
            <div class="counterinfo">
                <p class="counter">147</p>
                <h3>Premios</h3>
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
                <h3>Años de experiencia</h3>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-6 agileits_w3layouts_about_counter_left">
            <div class="countericon">
                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
            </div>
            <div class="counterinfo">
                <p class="counter">150</p>
                <h3>Administración</h3>
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
                        <p>Luego de estar por varias empresas de mercadeo en red, entendí que sin la formación y la capacitación constante, no hay cambios. En PROMOLÍDER encontre la combinación perfecta: formación y mi propio negocio .</p>
                        <div class="client">
                            <img src="{{asset('web/img/images/c1.jpg')}}" alt="" />
                            <h5>Santa Cruz Vidarte</h5>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                    <li>
                        <p>Me costaba mucho relacionarme con otras personas.  Con mi formaciòn en Coaching descubrí mis creencias limitantes y me ayudo a despertar mi talento, cada día tengo más amigos.</p>
                        <div class="client">
                            <img src="{{asset('web/img/images/c2.jpg')}}" alt="" />
                            <h5>Vannesa Vega</h5>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                    <li>
                        <p>Cuando me hablaron de PROMOLÍDER, lo primero que pense fue en ventas, productos y cajas, jajajaja. Tener mi negocio de capacitacion y ganar dinero por cambiar mi forma de pensar, es todo lo que estaba buscando....</p>
                        <div class="client">
                            <img src="{{asset('web/img/images/c3.jpg')}}" alt="" />
                            <h5>Chris Mariangel Tigrera</h5>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                    <li>
                        <p>Para mi, estar actualizado con la información a través la capacitación, es tener poder ante los demás .</p>
                        <div class="client">
                            <img src="{{asset('web/img/images/c4.jpg')}}" alt="" />
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
            <h3>Si quieres cambiar tu realidad, cambia tu forma de pensar.</h3>
            <p>La pobreza, la escases de dinero y otros males son el reflejo de la forma de pensar que has mantenido por mucho tiempo, cambiar significa desaprender esas creencia limitantes  para reaprender nuevos programas  que te llevan al objetivo deseado.</p>
            <div class="more-button text-center">
                <a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#myModal1">leer más</a>
            </div>
        </div>
    </div>
    <!-- //servicesbottom -->

    <!-- team -->
    <div class="team-section">
        <div class="container">
            <div class="w3l-heading">
                <h3>Nuestros Profesionales</h3>
            </div>
            <div class="team-row">
                <div class="col-md-3 team-grids">
                    <div class="team-img">
                        <img class="img-responsive" src="{{asset('web/img/images/t1.jpg')}}" alt="" />
                        <div class="captn">
                            <ul class="top-links">
                                <li><a href="https://www.facebook.com/alfonsosuarezrosales"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/_AlfonsoSuarez"><i class="fa fa-twitter"></i></a></li>

                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="team-agile">
                        <h4>Alfonso Suares</h4>
                        <p>
                            Destacado Professional Coaching,  Executive MBA, Business Administration and Management.  Escritor y Autor Bell Seller de más de 5 libros, entre sus obras más destacadas: TU ÉXITO ERES TÚ.
                            .</p>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="team-img">
                        <img class="img-responsive" src="{{asset('web/img/images/t2.jpg')}}" alt="" />
                        <div class="captn">
                            <ul class="top-links">
                                <li><a href="Jannette Carolina Valdez Chacón"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="team-agile">
                        <h4>Janeth Carolina Valdez</h4>
                        <p>Human Resuorces & Técnicas Project Consultan, Mantenimiento Industrial, Docente facilitadora, presidente y directora creativa Asesorías, ideas y Arquetipos, S.A.</p>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="team-img">
                        <img class="img-responsive" src="{{asset('web/img/images/t3.jpg')}}" alt="" />
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
                        <p> Consultor- Estratega Digital, Community Management, Educador y Redacctor Creativo para Redes Sociales
                        </p>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="team-img">
                        <img class="img-responsive" src="{{asset('web/img/images/t4.jpg')}}" alt="" />
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
                        <p> Coordinador académico, Diseñadora instruccional e-learning, planeación y mejora continua con más de doce años de destacada experiencia en el ramo educativo y empresarial.</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->
    {{View::make('web::layouts.footer')}}
@endsection



