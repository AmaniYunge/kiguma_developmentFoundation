@extends('master')

@section('content')

<section class="title">
    <div class="container">
        <div class="row-fluid" style="padding-top: 25px">
            <div class="span6">
                <h1>Portfolio</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active">Portfolio</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="portfolio" class="container main">
<ul class="gallery">
    <?php $i = 1 ?>
    @foreach(Portifolio::all() as $port)
    <li class="span4">
        <div class="preview">
            <img class="img-rounded img- thumbnail icon-align-center"  alt=" " src='{{asset("uploads/rooms/{$port->image}")}}' style="width: 85%; height: 200px">


        </div>
        <div class="desc">
            <h5>{{ $port->name }}</h5>
            <small>{{ $port->discr }}</small>
        </div>

    </li>
    @endforeach

</ul>

</section>
@stop