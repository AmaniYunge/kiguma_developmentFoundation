@extends('master')

@section('content')
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Terms of Use</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active">Terms of Use</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span6">
            <h2>Terms of Use</h2>
            <p><strong>Kiguma Development Foundation (KDF)</strong> is a Local non-governmental organization, not for profit, Registered under
                Non-Governmental Organizations Act, 2002 with Registration no.00NGO/00004308 since 2010.
            </p><p> It supports livelihood-challenged communities in  Tanzania to sustainably improve their well-being
                and standard of living. Currently it operate different programmes, KDF has adequate years’ experience working with
                marginalized communities.
            </p><p>Directed by its philosophy of participation and collaboration, KDF focuses on creating long-lasting development through
                an integrated approach that supports communities to become self-reliant and regain control over their lives.</p>
        </div>
        <div class="span6">
            <h2></h2>
            <div>
                <img class="pull-right" src="{{asset('images/kiguma.png')}}" alt="" style="height: 350px;width: 350px">
            </div>
        </div>
    </div>

    <hr>


</section>
@stop