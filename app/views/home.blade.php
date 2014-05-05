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
                        <img src="{{asset('images/logo1.png')}}" alt="" style="box-shadow: 5px 5px 10px #888888" class="img-responsive">
                        <h3>More Info</h3>
                    </div>
                    <ul class="nav nav-stacked">
                        <li class="active"><a href="{{url('career')}}">Career <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                        <li class="active"><a href="{{url('faq')}}">FAQ <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{url('reg')}}">Registration <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                        <li><a href="{{url('policy')}}">Privacy Policy <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                        <li><a href="{{url('terms')}}">Terms Of Use <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="span6" style="text-align: center; color: #2dcc70">
                <h2>WHAT WE DO</h2>
                <p class="no-margin"><h4>
                    We work closely with communities to identify and develop projects that promote ownership,<br> are relevant and sustainable.</h4></p>
            </div>
            <div class="span3">
                <img class="pull-right" src="{{asset('images/logo1.png')}}" alt="" style="box-shadow: 5px 5px 10px #888888">
            </div>
        </div>
    </div>
</section>

<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
            <h3>What We Offer</h3>
            <p class="lead">Our work uses an integrated approach to deliver holistic development to communities in the following areas:</p>
        </div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
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
                        <i class="icon-thumbs-up-alt icon-medium"></i>
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
                        <i class="icon-leaf icon-medium icon-rounded"></i>
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
                        <i class="icon-shopping-cart icon-medium"></i>
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
                        <i class="icon-globe icon-medium"></i>
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
                        <i class="icon-globe icon-medium"></i>
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
        <ul class="gallery col-4">
            <!--Item 1-->
            <li>
                <div class="preview">
                    <img class="img-rounded" alt=" " src="{{asset('images/portfolio/thumb/item1.jpg')}}" style="box-shadow: 5px 5px 10px #888888">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>hgGJSKHBKclnsk</h5>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="{{asset('images/portfolio/full/item1.jpg')}}" alt=" " width="100%" style="max-height:400px;box-shadow: 5px 5px 10px #888888">
                    </div>
                </div>                 
            </li>
            <!--/Item 1--> 

            <!--Item 2-->
            <li>
                <div class="preview">
                    <img class="img-rounded" alt=" " src="{{asset('images/portfolio/thumb/item2.jpg')}}" style="box-shadow: 5px 5px 10px #888888">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>hghagjakshkja</h5>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="{{asset('images/portfolio/full/item2.jpg')}}" alt=" " width="100%" style="max-height:400px; box-shadow: 5px 5px 10px #888888">
                    </div>
                </div>                 
            </li>
            <!--/Item 2-->

            <!--Item 3-->
            <li>
                <div class="preview">
                    <img class="img-rounded" alt=" " src="{{asset('images/portfolio/thumb/item3.jpg')}}" style="box-shadow: 5px 5px 10px #888888">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-3"><i class="icon-eye-open"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>ggushcijsojkpos</h5>
                </div>
                <div id="modal-3" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="{{asset('images/portfolio/full/item3.jpg')}}" alt=" " width="100%" style="max-height:400px;box-shadow: 5px 5px 10px #888888">
                    </div>
                </div>                 
            </li>
            <!--/Item 3--> 

            <!--Item 4-->
            <li>
                <div class="preview">
                    <img class="img-rounded"  alt=" " src="{{asset('images/portfolio/thumb/item4.jpg')}}" style="box-shadow: 5px 5px 10px #888888">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>yhghciklskcj;S;</h5>
                </div>
                <div id="modal-4" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="{{asset('images/portfolio/full/item4.jpg')}}" alt=" " width="100%" style="max-height:400px;box-shadow: 5px 5px 10px #888888">
                    </div>
                </div>                 
            </li>
            <!--/Item 4-->               

        </ul>
    </div>

</section>

<section id="clients" class="main">
    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="clearfix">
                    <h2 class="pull-left">OUR PARTNERS</h2>
                    <div class="pull-right">
                        <a class="prev" href="#myCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                    </div>
                </div>
                <p>We work closely with communities to identify and develop projects that promote ownership</p>
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

