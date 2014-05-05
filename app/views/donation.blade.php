@extends('master')

@section('content')
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Donation</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active">Donation</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="about-us" class="container main">

    <h2>Donation</h2>
    <div class="row-fluid">
        <div class="span6">
            <p><strong>Kiguma Development Foundation (KDF)</strong> is a Local non-governmental organization, not for profit, Registered under
                Non-Governmental Organizations Act, 2002 with Registration no.00NGO/00004308 since 2010.
            </p><p> It supports livelihood-challenged communities in  Tanzania to sustainably improve their well-being
                and standard of living. Currently it operate different programmes, KDF has adequate years’ experience working with
                marginalized communities.
            </p><p>Directed by its philosophy of participation and collaboration, KDF focuses on creating long-lasting development through
                an integrated approach that supports communities to become self-reliant and regain control over their lives.</p>
            <div class="button span6 pull-right">
                <button type="button" class="btn btn-primary"><a data-toggle="modal" href="#modal-1" style="color: #ffffff">Donate Now</button>
                <div class="desc">
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <h4 class="modal-title">Donation Form</h4>
                        <hr>
                    </div>
                    <div class="modal-body">
                        <p>Donate Now&hellip;</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="span6">
            <div>
                <img class="img-rounded img- thumbnail icon-align-center"  alt=" " src="{{asset('images/portfolio/thumb/item8.jpg')}}" style="width: 440px; height: 300px; box-shadow: 5px 5px 10px #888888">
            </div>
        </div>
    </div>

    <hr>


</section>
@stop