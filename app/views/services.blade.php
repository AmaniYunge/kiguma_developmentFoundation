@extends('master')

@section('content')
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Services</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->


<section class="services">
    <div class="container">
        <div class="row-fluid">
            <div class="span4">
                <div class="center">
                    <img class="img-rounded img- thumbnail icon-align-center"  alt=" " src="{{asset('images/portfolio/thumb/images (3).jpg')}}" style="width: 150px; height: 100px">
                    <p> </p>
                    <h4>Basic Services</h4>
                    <p>We work on programmes that promote healthy populations living in healthy environments by improving access to quality services in (Primary Health Care, Water,
                        Sanitation & Hygiene and Education).</p>
                </div>
            </div>

            <div class="span4">
                <div class="center">
                    <img class="img-rounded img- thumbnail icon-align-center"  alt=" " src="{{asset('images/portfolio/thumb/governance_1.jpg')}}" style="width: 150px; height: 100px">
                    <p> </p>
                    <h4>Governance  &amp; Civil Society Strengthening </h4>
                    <p>We unleash the power in communities to become strong actors in peace building and active participants in their own development.</p>
                </div>
            </div>

            <div class="span4">
                <div class="center">
                    <img class="img-rounded img- thumbnail icon-align-center"  alt=" " src="{{asset('images/portfolio/thumb/n00073588-b.jpg')}}" style="width: 150px; height: 100px">
                    <p> </p>
                    <h4>Peace Building Initiatives</h4>
                    <p>We unleash the power in communities to become strong actors in peace building and active participants in their own development.</p>
                </div>
            </div>

        </div>

        <hr>

        <div class="row-fluid">
            <div class="span4">
                <div class="center">
                    <img class="img-rounded img- thumbnail icon-align-center"  alt=" " src="{{asset('images/portfolio/thumb/DSC07001.jpg')}}" style="width: 150px; height: 100px">
                    <p> </p>
                    <h4>Food &amp; Income Security</h4>
                    <p>We work with partners and communities to increase food production and eradicate dependency on food relief, tackle environmental degradation and increase household incomes.</p>
                </div>
            </div>

            <div class="span4">
                <div class="center">
                    <img class="img-rounded img- thumbnail icon-align-center"  alt=" " src="{{asset('images/portfolio/thumb/download.jpg')}}" style="width: 150px; height: 100px">
                    <p> </p>
                    <h4>Environmental Management &amp; Protection</h4>
                    <p>We work with partners and communities to increase food production and eradicate dependency on food relief, tackle environmental degradation and increase household incomes.</p>
                </div>
            </div>

            <div class="span4">
                <div class="center">
                    <img class="img-rounded img- thumbnail icon-align-center"  alt=" " src="{{asset('images/portfolio/thumb/item1.jpg')}}" style="width: 150px; height: 100px">
                    <p> </p>
                    <h4>Community Health</h4>
                    <p>We work on programmes that promote healthy populations living in healthy environments by improving access to quality services in (Primary Health Care, Water,
                        Sanitation & Hygiene).</p>
                </div>
            </div>

        </div>

        <hr>
    </div>
</section>
@stop