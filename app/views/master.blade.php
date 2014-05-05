<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home | KDF</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

   {{HTML::style("css/bootstrap.min.css")}}
    {{HTML::style("css/bootstrap-responsive.min.css")}}
    {{HTML::style("css/font-awesome.min.css")}}
    {{HTML::style("css/main.css")}}
    {{HTML::style("css/sl-slide.css")}}

    {{HTML::script("js/vendor/modernizr-2.6.2-respond-1.1.0.min.js")}}
    {{HTML::script("js/vendor/jquery-1.9.1.min.js")}}

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body style="font-family: Segoe UI;font-size: 15px">

<!--Header-->
<header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a id="logo" class="pull-left" href="/"></a>
            <div class="nav-collapse collapse pull-right">
                <ul class="nav">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('about-us')}}">About</a></li>
                    <li><a href="{{url('services')}}">Services</a></li>
                    <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                    <li><a href="{{url('blog')}}">Blog</a></li>
                    <li><a href="{{url('contact-us')}}">Contacts</a></li>
                    <li class="login">
                        <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>
<!-- /header -->
@yield('content')
<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span4">
                <h4>ADDRESS</h4>
                <ul class="unstyled address">
                    <h5>Head Quaters(Ushirika street/Nzega District)</h5>
                    <li>
                        <i class="icon-user"></i><strong>Executive Director</strong>
                    </li>
                    <li>
                        <i class="icon-home"></i>Kiguma Development Foundation
                    </li>
                    <li>
                        P.O Box 80,&nbsp;&nbsp;Nkinga<br>Tabora&nbsp; &nbsp;Tanzania
                    </li>
                    <li>
                        <i class="icon-envelope"></i>pskdf@hotmail.com
                    </li>
                    <li>
                        <i class="icon-globe"></i> www.kigumadevelopmentfoundation.org
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Hot line:</strong>+255 787 550 250
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
            <div id="tweets" class="span2">
                <h4>OUR FOUNDATION</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="{{url('about-us')}}">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
<!--                        <li><a href="{{url('terms')}}">Terms of Use</a></li>-->
                        <li><a href="{{url('policy')}}">Privacy Policy</a></li>
                        <li><a href="{{url('hiring')}}">We are hiring</a></li>
                        <li><a href="{{url('blog')}}">Blog</a></li>
                    </ul>
                </div>
            </div>


            <div class="span6">
                <h4>OUR GALLERY</h4>
                <div class="row-fluid first">
                    <ul class="thumbnails">
                        <li class="span3">
                            <img class="img-rounded img- thumbnail "  alt=" " src="{{asset('images/portfolio/thumb/item1.jpg')}}" width="75" height="75" alt="01 (6)">
                        </li>
                        <li class="span3">
                           <img class="img-rounded img- thumbnail "  alt=" " src="{{asset('images/portfolio/thumb/item1.jpg')}}" width="75" height="75" alt="01 (6)">
                        </li>
                        <li class="span3">
                            <img class="img-rounded img- thumbnail "  alt=" " src="{{asset('images/portfolio/thumb/item1.jpg')}}" width="75" height="75" alt="01 (6)">
                        </li>
                        <li class="span3">
                            <img class="img-rounded img- thumbnail "  alt=" " src="{{asset('images/portfolio/thumb/item1.jpg')}}" width="75" height="75" alt="01 (6)">
                        </li>
                    </ul>
                </div>
                <br>
                <div class="row-fluid">
                    <ul class="thumbnails">
                        <li class="span3">
                           <img class="img-rounded img- thumbnail "  alt=" " src="{{asset('images/portfolio/thumb/item1.jpg')}}" width="75" height="75" alt="01 (6)">
                        </li>
                        <li class="span3">
                           <img class="img-rounded img- thumbnail "  alt=" " src="{{asset('images/portfolio/thumb/item1.jpg')}}" width="75" height="75" alt="01 (6)">
                        </li>
                        <li class="span3">
                            <img class="img-rounded img- thumbnail "  alt=" " src="{{asset('images/portfolio/thumb/item1.jpg')}}" width="75" height="75" alt="01 (6)">
                        </li>
                        <li class="span3">
                           <img class="img-rounded img- thumbnail "  alt=" " src="{{asset('images/portfolio/thumb/item1.jpg')}}" width="75" height="75" alt="01 (6)">
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <!--/row-fluid-->
    </div>
    <!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2014 <a target="_blank" href="#" title="Kiguma Development Foundation">Kiguma Development Foundation</a>. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->


{{HTML::script("js/vendor/bootstrap.min.js")}}
{{HTML::script("js/main.js")}}
<!-- Required javascript files for Slider -->
{{HTML::script("js/jquery.ba-cond.min.js")}}
{{HTML::script("js/jquery.slitslider.js")}}
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript">
    $(function() {
        var Page = (function() {

            var $navArrows = $( '#nav-arrows' ),
                slitslider = $( '#slider' ).slitslider( {
                    autoplay : true
                } ),

                init = function() {
                    initEvents();
                },
                initEvents = function() {
                    $navArrows.children( ':last' ).on( 'click', function() {
                        slitslider.next();
                        return false;
                    });

                    $navArrows.children( ':first' ).on( 'click', function() {
                        slitslider.previous();
                        return false;
                    });
                };

            return { init : init };

        })();

        Page.init();
    });
</script>
<!-- /SL Slider -->
</body>
</html>