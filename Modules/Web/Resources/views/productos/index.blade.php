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
                        <li><a href="{{ route('web::nosotros.index') }}">Quiénes Somos</a></li>
                        <li class="active"><a href="{{ route('web::productos.index') }}">INFOPRODUCTOS</a></li>
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
        <!-- header -->

        <!-- //header -->
        <h2>Infoproductos</h2>
    </div>
</div>
<!-- //banner -->

<!-- Portfolio section -->
<section class="portfolio-agileinfo" id="portfolio">
    <h3>Infoproductos</h3>
    <div class="container">
        <div class="gallery-grids">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist" data-aos="zoom-in">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Todos</a></li>
                    <li role="presentation"><a href="#teach" role="tab" id="teach-tab" data-toggle="tab" aria-controls="teach">Gerencia </a></li>
                    <li role="presentation"><a href="#train" role="tab" id="train-tab" data-toggle="tab" aria-controls="train">Inversión y Trading</a></li>
                    <li role="presentation"><a href="#learn" role="tab" id="learn-tab" data-toggle="tab" aria-controls="learn"> Crecimiento Personal</a></li>
                    <li role="presentation"><a href="#award" role="tab" id="award-tab" data-toggle="tab" aria-controls="award">Emprendimiento</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="tab_img">
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g12.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                                    <img src="{{asset('web\img\images\g12.jpg')}}" class="img-responsive" alt="Life Coaching" />
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Life Coaching</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g2.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                                    <img src="{{asset('web\img\images\g2.jpg')}}" class="img-responsive" alt="Sistema de Gestion de Eficiencia Energetica ISO 50001"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Sistema de Gestión de Eficiencia Energética ISO 50001
                                        </h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g6.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                                    <img src="{{asset('web\img\images\g6.jpg')}}" class="img-responsive" alt="SST con Herramientas y Tecnicas de Coaching"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>SST con Herramientas y Técnicas de Coaching </h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g4.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                                    <img src="{{asset('web\img\images\g4.jpg')}}" class="img-responsive" alt="Auditor Lider Gestion de Calidad ISO 9001:2015"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Auditor Líder Gestión de Calidad ISO 9001:2015</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="tab_img">
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g10.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                                    <img src="{{asset('web\img\images\g10.jpg')}}" class="img-responsive" alt="Autocoaching"/>

                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Autocoaching</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g3.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                                    <img src="{{asset('web\img\images\g3.jpg')}}" class="img-responsive" alt="Auditor Lider en SST ISO 45001 2018"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Auditor Líder en SST ISO 45001 2018</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g9.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                                    <img src="{{asset('web\img\images\g9.jpg')}}" class="img-responsive" alt="Criptomonedas"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Criptomonedas</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g7.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                                    <img src="{{asset('web\img\images\g7.jpg')}}" class="img-responsive" alt="Sistema de Gestion Ambiental ISO 14001"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Sistema de Gestión Ambiental ISO 14001</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g8.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                                    <img src="{{asset('web\img\images\g8.jpg')}}" class="img-responsive" alt="Trading"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Trading</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g1.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                                    <img src="{{asset('web\img\images\g1.jpg')}}" class="img-responsive" alt="Auditor Lider SIG: ISO 9001,14001 y 4500"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Auditor Líder SIG: ISO 9001,14001 y 45001</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g5.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                                    <img src="{{asset('web\img\images\g5.jpg')}}" class="img-responsive" alt="Gestion de Riesgo"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Gestión de Riesgo</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g11.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                                    <img src="{{asset('web\img\images\g11.jpg')}}" class="img-responsive" alt="Despierta el talento"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Despierta el talento</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="teach" aria-labelledby="teach-tab">
                        <div class="tab_img">
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g1.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="2">
                                    <img src="{{asset('web\img\images\g1.jpg')}}" class="img-responsive zoom-img" alt="Auditor Lider SIG: ISO 9001, 14001 Y 45001"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Auditor Lider SIG: ISO 9001, 14001 Y 45001</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g2.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="2">
                                    <img src="{{asset('web\img\images\g2.jpg')}}" class="img-responsive zoom-img" alt="Sistema de Gestion de Eficiencia Energetica ISO 50001"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Sistema de Gestión de Eficiencia Energética ISO 50001 </h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g3.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="2">
                                    <img src="{{asset('web\img\images\g3.jpg')}}" class="img-responsive zoom-img" alt="Auditor Lider SST ISO 45001:2018"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Auditor Líder SST ISO 45001:2018</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g4.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="2">
                                    <img src="{{asset('web\img\images\g4.jpg')}}" class="img-responsive zoom-img" alt="Auditor Lider Gestión de Calidad ISO 9001:2015"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Auditor Líder Gestión de Calidad ISO 9001:2015</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g5.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="2">
                                    <img src="{{asset('web\img\images\g5.jpg')}}" class="img-responsive zoom-img" alt="imagen"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Gestión de Riesgo</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g6.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="2">
                                    <img src="{{asset('web\img\images\g6.jpg')}}" class="img-responsive zoom-img" alt="imagen"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>SST con Herramientas de Coaching</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g7.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="2">
                                    <img src="{{asset('web\img\images\g7.jpg')}}" class="img-responsive zoom-img" alt="imagen"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Sistema de Gestión Ambiental ISO 14001</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="train" aria-labelledby="train-tab">
                        <div class="tab_img">
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g8.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="3">
                                    <img src="{{asset('web\img\images\g8.jpg')}}" class="img-responsive zoom-img" alt="imagen"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Trading</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g9.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="3">
                                    <img src="{{asset('web\img\images\g9.jpg')}}" class="img-responsive zoom-img" alt="imagen"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Criptomoneda</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="learn" aria-labelledby="learn-tab">
                        <div class="tab_img">
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g10.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="4">
                                    <img src="{{asset('web\img\images\g10.jpg')}}"class="img-responsive zoom-img" alt="imagen"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Autocoaching</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g11.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="4">
                                    <img src="{{asset('web\img\images\g11.jpg')}}" class="img-responsive zoom-img" alt="imagen"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Despierta el talento</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g12.jpg')}}"class="b-link-stripe b-animate-go lightninBox" data-lb-group="4">
                                    <img src="{{asset('web\img\images\g12.jpg')}}" class="img-responsive zoom-img" alt="imagen"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Life Coaching</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="award" aria-labelledby="award-tab">
                        <div class="tab_img">
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g13.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="5">
                                    <img src="{{asset('web\img\images\g13.jpg')}}" class="img-responsive zoom-img" alt="imagen"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Coaching para Emprendedores</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g14.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="5">
                                    <img src="{{asset('web\img\images\g14.jpg')}}" class="img-responsive zoom-img" alt="imagen"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Network Marketing</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g15.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="5">
                                    <img src="{{asset('web\img\images\g15.jpg')}}"class="img-responsive zoom-img" alt="imagen"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Marketing Digital</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                <a href="{{asset('web\img\images\g16.jpg')}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="5">
                                    <img src="{{asset('web\img\images\g16.jpg')}}" class="img-responsive zoom-img" alt="imagen"/>
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5>Community Management</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Portfolio section -->

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-4 footerleft">
            <h3>campus virtual</h3>
            <p>Visita nuestro campus virtual:
                www.promolider.org/universidad
                .</p>
            <p>También puedes participar en todo
                nuestros cursos gratuitos e invitar a tus
                amigos, para mayor información contacta a uno de
                nuestro miembros.</p>
        </div>
        <div class="col-md-4 footermiddle">
            <h3>Estamos en Contacto</h3>
            <p>Lima Perú</p>
            <p></p>
            <p class="phone">Teléfono: +51(01) 483 3997</p>
            <p class="phone">whatsapp: +51 995668600</p>
            <p class="phone">Correo: <a href="mailto:info@example.com">promoliderorg@gmail.com</a></p>
        </div>
        <div class="col-md-4 footerright">
            <h3>Twitter </h3>
            <ul class="w3agile_footer_grid_list">
                <li>Promolíder se expande por latinoamérica <a href="#">promolider.org</a>
                    <span><i class="fa fa-twitter" aria-hidden="true"></i> 02 2017 ago</span></li>
                <li>Promolíder llega a Lima, Perú <a href="#">promolider.org</a>
                    <span><i class="fa fa-twitter" aria-hidden="true"></i> 03 2017 ago</span></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //footer -->

<!-- copyright -->
<div class="wthree_copy_right">
    <div class="container">
        <p>© 2017 Promolíder.  |  <a href="https://www.promolider.org/">Promolíder</a></p>

    </div>
</div>
<!-- //copyright -->
@endsection
<!-- js for portfolio lightbox -->
<script src="{{asset('web\js\js3\jQuery.lightninBox.js')}}"></script>
<script type="text/javascript">
    $(".lightninBox").lightninBox();
</script>

