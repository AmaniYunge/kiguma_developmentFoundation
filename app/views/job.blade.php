@extends('master')

@section('content')


{{HTML::style("css/style.css" )}}
    <section class="title">
        <div  data-spy="scroll" data-target=".navbar">
        <div class="container">
            <div class="row-fluid">
                <ul class="nav" style="text-align: center">
                    <li class="active"><a href="#carouselSection">Interniship</a></li>
                    <li><a href="#ourServices">Job</a></li>
                    <li><a href="#portfolioSection">Volunteers</a></li>
                    <li><a href="#blogSection">Tenders</a></li>
                    <li><a href="#contactSection">Consultancy</a></li>
                </ul>
            </div>
        </div>
        </div>
        </section>



<div id="carouselSection">
    <h1 class="cntr">Internship</h1>
    <div class="container">
        <div class="row">
            <div class="span2">

            </div>
            <div class="span8">
                @if(Chances::where('type','Internship')->count() == 0)
                <h2 style="color: orangered"> There are no current interns openings </h2>
                @else
                @foreach(Chances::where('type','Internship')->get() as $chance )
                <h2 style="color: orangered">{{ $chance->title }}<a href='{{ asset( "uploads/resources/{$chance->file}" )}}'> <i class="fa fa-download text-info pull-right"></i></a></h2>
                <p class="lead" style="color:steelblue">{{ $chance->discr }}</p>

                @endforeach
                @endif

            </div>


            <div class="span2">
            <img class="img-responsive" src="{{asset('images/portfolio/thumb/intern.jpg')}}" alt="" style="box-shadow: 5px 5px 10px #888888;height: 100px">
        </div>
            </div>
    </div>
</div>
<!-- Our Services======================================== -->
<div id="ourServices">
    <div class="container">
        <h1 class="cntr">Job</h1>
        <div class="row">
            <div class="span2">
                <img class="img-responsive" src="{{asset('images/portfolio/thumb/job.jpg')}}" alt="" style="box-shadow: 5px 5px 10px #888888">
            </div>

            <div class="span8">
                @if(Chances::where('type','Job')->count() == 0)
                <h2 style="color: #008000"> There are no current job vacancies  </h2>
                @else
                @foreach(Chances::where('type','Job')->get() as $chance )
                <h2 style="color: #008000">{{ $chance->title }}<a href='{{ asset( "uploads/resources/{$chance->file}" )}}'> <i class="fa fa-download text-info pull-right"></i></a></h2>
                <p class="lead" style="color:#ee5f5b">{{ $chance->discr }}</p>

                @endforeach
                @endif

            </div>

            <div class="span2">

            </div>

        </div>
    </div>
</div>

<!-- Our Portfolio======================================== -->
<div id="portfolioSection">
<h1 class="cntr">Volunteers</h1>
<div class="container">
    <div class="row">
        <div class="span2">

        </div>

        <div class="span8">
            @if(Chances::where('type','Volunteers')->count() == 0)
            <h2 style="color: orangered"> There are no current volunteering openings </h2>
            @else
            @foreach(Chances::where('type','Volunteers')->get() as $chance )
            <h2 style="color: orangered">{{ $chance->title }}<a href='{{ asset( "uploads/resources/{$chance->file}" )}}'> <i class="fa fa-download text-info pull-right"></i></a></h2>
            <p class="lead" style="color:mediumpurple">{{ $chance->discr }}</p>

            @endforeach
            @endif

        </div>


    <div class="span2">
        <img class="img-responsive" src="{{asset('images/portfolio/thumb/volunteer.jpg')}}" alt="" style="box-shadow: 5px 5px 10px #888888">
    </div>

    </div>
</div>
</div>
<!-- ========================= -->
<!-- Contact Section -->
<div id="blogSection">
    <h1 class="cntr">Tenders</h1>
    <div class="container">
        <div class="row">
            <div class="span2">
                <img class="img-responsive" src="{{asset('images/portfolio/thumb/tender.jpg')}}" alt="" style="box-shadow: 5px 5px 10px #888888">
            </div>

            <div class="span8">
                @if(Chances::where('type','Tenders')->count() == 0)
                <h2 style="color: #808080"> There are no current tenders openings </h2>
                @else
                @foreach(Chances::where('type','Tenders')->get() as $chance )
                <h2 style="color:  #808080">{{ $chance->title }}<a href='{{ asset( "uploads/resources/{$chance->file}" )}}'> <i class="fa fa-download text-info pull-right"></i></a></h2>
                <p class="lead" style="color:#3498DB">{{ $chance->discr }}</p>

                @endforeach
                @endif

            </div>

            <div class="span2">

            </div>
    </div>
</div>
<!-- Contact Section -->
<div id="contactSection">
    <h1 class="cntr">Consultancy</h1>
    <div class="container">
        <div class="row">
            <div class="span2">

            </div>

            <div class="span8">
                @if(Chances::where('type','Consultancy')->count() == 0)
                <h2 style="color: khaki"> There are no current openings for consultancy </h2>
                @else
                @foreach(Chances::where('type','Consultancy')->get() as $chance )
                <h2 style="color: khaki">{{ $chance->title }}<a href='{{ asset( "uploads/resources/{$chance->file}" )}}'> <i class="fa fa-download text-info pull-right"></i></a></h2>
                <p class="lead" style="color:#000000">{{ $chance->discr }}</p>

                @endforeach
                @endif

            </div>


            <div class="span2">
                <img class="img-responsive" src="{{asset('images/portfolio/thumb/consultancy2.jpg')}}" alt="" style="box-shadow: 5px 5px 10px  #888888">
            </div>
        </div>
        </div>
</div>
<!-- Wrapper end -->



<!-- Javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{HTML::script("js/jquery.easing-1.3.min.js")}}
{{HTML::script("js/jquery.scrollTo-1.4.3.1-min.js")}}
<script>

    $('#testimonial').carousel({
        interval: 10000
    })
    $('#myCarousel').carousel({
        interval: 7000
    })
</script>

@stop