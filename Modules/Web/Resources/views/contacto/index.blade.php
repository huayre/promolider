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
                        <li><a href="{{ route('web::productos.index') }}">INFOPRODUCTOS</a></li>
                        <!--	<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">UNIVERSIDAD <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="typography.html">Short Codes</a></li>-->
                        <!--	</ul>
                      </li>--><li><a href="https://promolider.org/universidad/index.php" target="_blank">UNIVERSIDAD</a></li>
                        <li class="active"><a href="{{ route('web::contacto.index') }}">Contacto</a></li>
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
        <!-- //header -->
                <h2>Contacto</h2>
    </div>
</div>
<!-- //banner -->

<!-- contact -->
<div class="agile_about contact" id="contact">

    <div class="agileits_agile_about">
        <h3>Ubicanos</h3>
                                    <div class="agileinfo_map_color">
                                        <div class="agileinfo_map_color_grid">
                                            <div class="col-md-3 agileinfo_map_color_grid_left">
                                                <h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Ubicación</h4>
                                                <p>Sede Principal Lima -Perú.</p>
                                            </div>
                                            <div class="col-md-3 agileinfo_map_color_grid_left">
                                                <h4><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Correo</h4>
                                                <p><a href="mailto:example@mail.com"> promoliderorg@gmail.com</a></p>
                                                <p><a href="mailto:example@mail.com"> promoliderp@gmail.com</a></p>
                                            </div>
                                            <div class="col-md-3 agileinfo_map_color_grid_left">
                                                <h4><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Teléfono</h4>
                                                <p>(01) 4833997</p>
                                                <p></p>
                                            </div>
                                            <div class="col-md-3 agileinfo_map_color_grid_left">
                                                <h4><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Social</h4>
                                                <div class="connect-social">
                                                    <ul>
                                                        <li><a href="https://www.facebook.com/promolideroficial/" class="social-button facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="https://twitter.com/promoliderorg" class="social-button twitter"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="https://ve.linkedin.com/in/promolider-org-3b6b202a" class="social-button linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>

<div class="container">
        <div class="agileits_agile_about_mail">
            <form action="" method="post">
                <div class="col-md-6 agileits_agile_about_mail_left">
                    <input type="text" name="Name" placeholder="Name" required="" id="nameid">
                <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 agileits_agile_about_mail_left">
                    <input type="text" name="Subject" placeholder="Subject" required="" id="subjectid">
                <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 agileits_agile_about_mail_left">
                    <input type="email" name="Email" placeholder="Email" required="" id="emailid">
                <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 agileits_agile_about_mail_left">
                    <input type="text" name="Phone" placeholder="Phone" required="" id="phoneid">
                <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
                <textarea name="Message" placeholder="Message..." required="" id="messageid"></textarea>
                <div class="submit">
                    <input type="submit" value="Submit" id="contactb">
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- contact script -->
<script type="text/javascript">
var submit = document.getElementById("contactb");
submit.onclick = function() {
    var name =document.getElementById("nameid").value;
    var subject = document.getElementById("subjectid").value;
    var email = document.getElementById("emailid").value;
    var phone = document.getElementById("phoneid").value;
    var message = document.getElementById("messageid").value;
    sendEmail(name, subject, email, phone, message);
}
</script>
<!-- //contact script -->

<!-- //contact -->

<!-- map -->
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.47339870626!2d-0.2417004386729234!3d51.52855824202755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1497263047247"></iframe>
</div>
<!-- map -->

<!-- footer -->
<div class="footer">
<div class="container">
    <div class="col-md-4 footerleft">
        <h3>Toma acción</h3>
    <p>Unete a nuestra increible oportunidad
para que conozcas personas extraordinarias.</p>
    <p>Los Miembros  de nuestra red disfrutan de
entrenamientos, capacitacion acelerada y apoyo
especializado. En PROMOLIDER la consigna es: Juntos
alcanzamos la grandeza.</p>
    </div>
    <div class="col-md-4 footermiddle">
        <h3>UBICANOS</h3>
        <p>Lima Perú</p>
        <p></p>
        <p class="phone">Teléfono: +51(01) 483 3997</p>
        <p class="phone">Whatsapp: +51 995668600</p>
        <p class="phone">Correo: <a href="mailto:info@example.com">promoliderorg@gmail.com</a></p>
    </div>
    <div class="col-md-4 footerright">
        <h3>Twitter </h3>
        <ul class="w3agile_footer_grid_list">
            <li>Promolíder red educativa empresarial monetizada  <a href="#">promoliderorg.com</a>
            <span><i class="fa fa-twitter" aria-hidden="true"></i> 02 2017 ago</span></li>
            <li>Promolíder se expande por latinoamérica <a href="#">promoliderorg.com</a>
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
    <p>© 2017 Promolíder. Derechos reservados | por  <a href="http://promolider.org/">promolíder</a></p>

</div>
</div>
<!-- //copyright -->
@endsection
