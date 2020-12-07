<!DOCTYPE html>
<html lang="es-ES"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Promolider</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('web\css\main.css')}}">
    <link rel="icon" href="https://promolider.org/sistema/img/iso2.png" />

    <html lang="en">
    <!-- Head -->

    <title>Promolíder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Mercadeo en red,oportunidad de negocio, Multinivel nuevo, Formacion de Lideres,Ganar dinero, Coaching, inversion, trading, Marketing digital, certificacion"/>

    <link rel="stylesheet" href="{{asset('web\css\css3\flexslider.css')}}" type="text/css" media="all"><!-- for testimonials -->


    <!-- default css files -->
    <link rel="stylesheet" href="{{asset('web\css\css3\bootstrap.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('web\css\css3\style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('web\css\css3\font-awesome.min.css')}}">
    <!-- default css files -->

    <!--web font-->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!--//web font-->
    <body>

        @yield('banner')
        @yield('content')

        <!-- Default-JavaScript-File -->
        <script type="text/javascript" src="{{asset('web\js\js3\jquery-2.1.4.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('web\js\js3\bootstrap.js')}}"></script>
        <!-- //Default-JavaScript-File -->


        <!--banner Slider starts Here-->
		<script src="{{asset('web\js\js3\responsiveslides.min.js')}}"></script>
			<script>
				// You can also use "$(window).load(function() {"
				$(function () {
					// Slideshow 4
					$("#slider4").responsiveSlides({
					    auto: true,
					    pager:true,
					    nav:true,
					    speed: 500,
					    namespace: "callbacks",
					    before: function () {
					      $('.events').append("<li>before event fired.</li>");
					    },
					    after: function () {
					      $('.events').append("<li>after event fired.</li>");
					    }
					});

				});
			</script>
        <!--banner Slider ends Here-->

        <script src="{{asset('web\js\js3\SmoothScroll.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('web\js\js3\move-top.js')}}"></script>
        <script type="text/javascript" src="{{asset('web\js\js3\easing.js')}}"></script>
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                    };
                */

                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
        <!-- //here ends scrolling icon -->

        <!-- FlexSlider-JavaScript -->
        <script defer src="{{asset('web\js\js3\jquery.flexslider.js')}}"></script>
        <script type="text/javascript">
            $(function(){
                SyntaxHighlighter.all();
            });
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>

    </body>
</html>
