@extends('master')

@section('content')
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Registration</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active">Registration</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span6">
            <h2>Registration Description</h2>
            <p><strong>Kiguma Development Foundation (KDF)</strong> is a Local non-governmental organization, not for profit, Registered under
                Non-Governmental Organizations Act, 2002 with Registration no.00NGO/00004308 since 2010.
            </p><p> It supports livelihood-challenged communities in  Tanzania to sustainably improve their well-being
                and standard of living. Currently it operate different programmes, KDF has adequate years’ experience working with
                marginalized communities.
            </p><p>Directed by its philosophy of participation and collaboration, KDF focuses on creating long-lasting development through
                an integrated approach that supports communities to become self-reliant and regain control over their lives.</p>
        </div>
        <div class="span6 pull-right">
            <h2>Registration Certificate</h2>
            <div>
                <img class="img-rounded img- thumbnail icon-align-center"  alt=" " src="{{asset('images/portfolio/thumb/reg.jpg')}}" style="width: 540px; height: 600px">
            </div>
        </div>
    </div>

    <hr>


</section>
@stop