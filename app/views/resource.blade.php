@extends('master')

@section('content')
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Resources</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active">Resources</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="about-us" class="container main">
    <div class="row">
        <div class="span6">
            <h2>Our Resources</h2>
            <p>As a learning organization, KDF is keen on documenting its experiences as well
            as results and impact of its work with communities in its districts of operations
            and making them available to a diverse audience. Explore and learn more about
            how our work is making a difference in the lives of many Tanzanian communities
            in this section where we have provided a range of publications that we produce
            regularly.</p>
            <p> If you need more information please email us on: <strong>pskdf@hotmail.com</strong></p>

        </div>
        <div class="span6">
            <h2></h2>
            <div>
                <img class="pull-right" src="{{asset('images/kiguma.png')}}" alt="" style="box-shadow: 5px 5px 10px #888888;height: 250px;width: 250px">
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="span3">
            <div class="center">
                <h4><strong>Annual Reports</strong></h4>
                @if(Resources::where('type','Annual Reports')->count() == 0)

                <h5> There are no current Annual Reports Posted</h5>
            @else
            @foreach(Resources::where('type','Annual Reports')->get() as $resources )
                <a href='{{ asset( "uploads/resources/{$resources->file}" )}}'><i class="fa fa-download text-info pull-right"></i></a>
               <h5>{{ $resources->title }}</h5>
            <p>{{ $resources->discr }}</p>

            @endforeach
            @endif

            </div>
        </div>

        <div class="span3">
            <div class="center">
                <h4><strong>Financial Reports </strong></h4>
                @if(Resources::where('type','Financial Reports')->count() == 0)

                <h5> There are no current Financial Report Posted</h5>
                @else
                @foreach(Resources::where('type','Financial Reports')->get() as $resources )
                <a href='{{ asset( "uploads/resources/{$resources->file}" )}}'><i class="fa fa-download text-info pull-right"></i></a>

                <h5>{{ $resources->title }}</h5>
                <p>{{ $resources->discr }}</p>

                @endforeach
                @endif
            </div>
        </div>

        <div class="span3">
            <div class="center">
                <h4><strong>Strategic Plans</strong></h4>
                @if(Resources::where('type','Strategic Plans')->count() == 0)

                <h5> There are no current Strategic Plan Posted</h5>
                @else
                @foreach(Resources::where('type','Strategic Plans')->get() as $resources )
                <a href='{{ asset( "uploads/resources/{$resources->file}" )}}'><i class="fa fa-download text-info pull-right"></i></a>

                <h5>{{ $resources->title }}</h5>
                <p>{{ $resources->discr }}</p>

                @endforeach
                @endif
            </div>
        </div>
        <div class="span3">
            <div class="center">
                <h4><strong>Brochures</strong></h4>
                @if(Resources::where('type','Brochures')->count() == 0)

                <h5> There are no current Brochures Posted</h5>
                @else
                @foreach(Resources::where('type','Brochures')->get() as $resources )
                <a href='{{ asset( "uploads/resources/{$resources->file}" )}}'><i class="fa fa-download text-info pull-right"></i></a>

                <h5>{{ $resources->title }}</h5>
                <p>{{ $resources->discr }}</p>

                @endforeach
                @endif
            </div>
        </div>
    </div>

    <hr>

</section>
@stop