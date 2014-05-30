@extends('master')

@section('content')
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Consultancy</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active">Consultancy</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span6">
            <h2>Consultancy</h2>
            <p>There are no current openings for consultancy.</p>
        </div>
        <div class="span6">
            <h2>Our Skills</h2>
            <div class="left_menu">
                <div class="caption">
                    <img src="{{asset('images/portfolio/thumb/career.png')}}" alt="" style="box-shadow: 5px 5px 10px #888888" class="img-responsive img-rounded">
                </div>
                <ul class="nav nav-stacked">
                    <li class="active"><a href="{{url('services')}}">Community Health <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                    <li class="active"><a href="{{url('services')}}">Basic Services <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                    <li><a href="{{url('services')}}">Peace Building Initiatives <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                    <li><a href="{{url('services')}}">Food  <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                    <li><a href="{{url('services')}}">Governance  &amp; Civil Society Strengthening <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                    <li><a href="{{url('services')}}">Food &amp; Income Security <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                </ul>
            </div>
        </div>
    </div>

    <hr>


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