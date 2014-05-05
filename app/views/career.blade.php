@extends('master')

@section('content')
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Career</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active">Career</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span6">
            <h2>Career</h2>
            <p><strong>Kiguma Development Foundation (KDF)</strong> is a Local non-governmental organization, not for profit, Registered under
                Non-Governmental Organizations Act, 2002 with Registration no.00NGO/00004308 since 2010.
            </p><p> It supports livelihood-challenged communities in  Tanzania to sustainably improve their well-being
                and standard of living. Currently it operate different programmes, KDF has adequate years’ experience working with
                marginalized communities.
            </p><p>Directed by its philosophy of participation and collaboration, KDF focuses on creating long-lasting development through
                an integrated approach that supports communities to become self-reliant and regain control over their lives.</p>
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