@extends('master')

@section('content')
    <!--Slider-->
    <section id="slide-show">
     <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container" style="width: 1352px; height: 520px;background-image: url({{asset('images/sample/slider/slide6.png')}});background-repeat: no-repeat">
                        <h2>Basic Services</h2>
                        <h3 class="gap">We are improving access to quality services.</h3>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-large btn-transparent text-info" href="{{url('donation')}}"><i class="icon-heart"></i>&nbsp;&nbsp;Donation</a>
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container" style="width: 1352px; height: 520px;background-image: url({{asset('images/sample/slider/slide2.png')}});background-repeat: no-repeat">
                        <h2>Food &amp; Income Security</h2>
                        <h3 class="gap">We work with partners and communities to increase<br> food production and eradicate dependency on food relief...</h3>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="btn btn-large btn-transparent text-info" href="{{url('donation')}}"><i class="icon-heart"></i>&nbsp;&nbsp;Donation</a>
                    </div>
                </div>
            </div>
            <!--Slider Item2-->

            <!--Slider Item3-->
            <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                   <div class="container" style="width: 1352px; height: 520px;background-image: url({{asset('images/sample/slider/slide3.png')}});background-repeat: no-repeat">
                    <h2>Civil Society Strengthening</h2>
                    <h3 class="gap">We unleash the power in communities to become strong actors in<br>peace building and active participants in their own development.</h3>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-large btn-transparent text-info" href="{{url('donation')}}"><i class="icon-heart"></i>&nbsp;&nbsp;Donation</a>
                </div>
            </div>
        </div>
        <!--Slider Item3-->
<!--Slider Item4-->
            <div class="sl-slide item4" data-orientation="horizontal" data-slice1-rotation="25" data-slice2-rotation="-15" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                   <div class="container" style="width: 1352px; height: 520px;background-image: url({{asset('images/sample/slider/slide5.png')}});background-repeat: no-repeat">
                    <h2>Community Health</h2>
                    <h3 class="gap">We work on programmes that promote<br> healthy populations living in healthy environments...</h3>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="btn btn-large btn-transparent text-info"  href="{{url('donation')}}"><i class="icon-heart"></i>&nbsp;&nbsp;Donation</a>
                </div>
            </div>
        </div>
        <!--Slider Item4-->

    </div>
    <!--/Slider Items-->

    <!--Slider Next Prev button-->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
        <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
    </nav>
    <!--/Slider Next Prev button-->

</div>
<!-- /slider-wrapper -->           
</section>
<!--/Slider-->

<section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="left_menu">
                    <div class="caption">
                        <img src="{{asset('images/kiguma2.jpg')}}" alt="" style="box-shadow: 5px 5px 10px #888888;height: 250px;width: 250px" class="img-responsive">
                        <h3>More Info</h3>
                    </div>
                    <ul class="nav nav-stacked">
<!--                        <li class="active"><a href="{{url('career')}}">Career <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>-->
                        <li class="active"><a href="{{url('faq')}}">FAQ <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{url('reg')}}">Registration <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                        <li><a href="{{url('policy')}}">Privacy Policy <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                        <li><a href="{{url('terms')}}">Terms Of Use <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="span6" style="text-align: center; color: #2dcc70">
                <h2>WHERE WE WORK</h2>
                <h4 class="lead"style="font-family: Segoe UI">
                   <p>Currently we support and facilitate community health and development
                       programmes in the remote area of Tanzania mainland as per our registration.
                       </p>

                </h4>
            </div>
            <div class="span3">
                <img class="pull-right" src="{{asset('images/kiguma2.jpg')}}" alt="" style="box-shadow: 5px 5px 10px #888888;height: 250px;width: 250px">
            </div>
        </div>
    </div>
</section>

<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
            <h2 style="text-align: center; color: #2dcc70">WHAT WE DO</h2>
            <p class="lead">We work closely with communities to identify and develop projects that promote
                ownership, are relevant and sustainable.<br>
                Our work uses an integrated approach to deliver holistic development to
                communities in the following areas...
            </p>
        </div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-cogs fa-3x text-success"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Basic Services</h4>
                        <p>We work on programmes that promote healthy populations living in healthy environments by
                            improving access to quality services in (Primary Health Care, Water, Sanitation & Hygiene and Education).</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-money fa-3x text-success"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Food &amp; Income Security</h4>
                        <p>We work with partners and communities to increase food production and eradicate dependency on food relief,  and increase household incomes.</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class=" fa fa-leaf fa-3x text-success"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Environmental Management &amp; Protection</h4>
                        <p>We work with partners and communities to increase food production and eradicate dependency on food relief, tackle environmental degradation and increase household incomes.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap"></div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class=" fa fa-lock fa-3x text-success"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Peace Building Initiatives</h4>
                        <p>We unleash the power in communities to become strong actors in peace building and active participants in their own development.</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-legal fa-3x text-success"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Governance  &amp; Civil Society Strengthening </h4>
                        <p>We unleash the power in communities to become strong actors in peace building and active participants in their own development.</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-globe fa-3x text-success"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Community Health</h4>
                        <p>We unleash the power in communities to become strong actors in peace building and active participants in their own development.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--/Services-->

<section id="recent-works">
    <div class="container">
        <div class="center">
            <h3>Our Recent Works</h3>
            <p class="lead">Look at some of the recent projects we have completed for the community.</p>
        </div>
        <div class="gap"></div>
        <div id="myCarousel" class="carousel slide">

            <div class="carousel-inner">
                <?php
                $i = 0;
                $k = 0;
                ?>
                <div class="active item">
                    <div class="row-fluid">
                @foreach(Slideshow::all() as $slide)
                    <?php $i++; $k++ ?>
                        <div class="span4">
                            <img src='{{asset("uploads/slideshow/{$slide->picture}")}}' style="box-shadow: 1px 1px 5px #888888;height: 100%; width: 100%">
                            <div class="desc" style="color: #48484c;padding-top:10px;font-family: 'Fjalla One'">
                                <h5 >{{ $slide->title }}</h5>
                                <small>{{ $slide->discr }}</small>
                            </div>
                        </div>

                        <?php
                        if($i == 3 && $k != Slideshow::all()->count()){
                            echo "</div></div><div class='item'><div class='row-fluid'>";
                            $i=0;
                        }
                        ?>
                @endforeach
                    </div></div>
                </div>

            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>

    </div>

</section>

<section id="clients" class="main">
    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="clearfix">
                    <h2 class="pull-left">OUR PARTNERS</h2>
                    <div class="pull-right">
                        <a class="prev" href="#myCarousel1" data-slide="prev"><i class="fa fa-angle-left icon-large"></i></a> <a class="next" href="#myCarousel1" data-slide="next"><i class="fa fa-angle-right icon-large"></i></a>
                    </div>
                </div>
                <p>We grateful to our development partners over the years who have continued to
                    believe and support our work of uplifting the lives of communities.
                </p>
            </div>
            <div class="span9">
                <div id="myCarousel" class="carousel slide clients">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="active item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="{{asset('images/sample/clients/logo1.png')}}"></a></li>
                                <li class="span3"><a href="#"><img src="{{asset('images/sample/clients/logo1.png')}}"></a></li>
                                <li class="span3"><a href="#"><img src="{{asset('images/sample/clients/logo1.png')}}"></a></li>
                                <li class="span3"><a href="#"><img src="{{asset('images/sample/clients/logo1.png')}}"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="{{asset('images/sample/clients/logo1.png')}}"></a></li>
                                <li class="span3"><a href="#"><img src="{{asset('images/sample/clients/logo1.png')}}"></a></li>
                                <li class="span3"><a href="#"><img src="{{asset('images/sample/clients/logo1.png')}}"></a></li>
                                <li class="span3"><a href="#"><img src="{{asset('images/sample/clients/logo1.png')}}"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="{{asset('images/sample/clients/logo1.png')}}"></a></li>
                                <li class="span3"><a href="#"><img src="{{asset('images/sample/clients/logo1.png')}}"></a></li>
                                <li class="span3"><a href="#"><img src="{{asset('images/sample/clients/logo1.png')}}"></a></li>
                                <li class="span3"><a href="#"><img src="{{asset('images/sample/clients/logo1.png')}}"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Carousel items -->

            </div>
        </div>
    </div>
</div>
</section>
<script>
    $(document).ready(function(){

        //hidding the navigation
        $(".left_menu ul.nav").hide();

        //adding hover effect
        $(".left_menu").hover(function(){
            $(this).find("ul.nav").show("slow");
            $(this).find(".caption img").hide("slow");
            $(this).find(".caption p").hide("slow");
        },function(){
            $(this).find("ul.nav").hide("slow");
            $(this).find(".caption img").show("slow");
            $(this).find(".caption p").show("slow");
        });
    });
</script>
@stop

