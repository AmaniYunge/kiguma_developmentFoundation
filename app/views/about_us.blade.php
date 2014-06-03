@extends('master')

@section('content')
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>About Us</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span6">
            <h2>What we are</h2>
            <p><strong>Kiguma Development Foundation (KDF)</strong> is a Local non-governmental organization, not for profit, Registered under
                Non-Governmental Organizations Act, 2002 with Registration no.00NGO/00004308 since 2010.
            </p><p> It supports livelihood-challenged communities in  Tanzania to sustainably improve their well-being
                and standard of living. Currently it operate different programmes, KDF has adequate years’ experience working with
                marginalized communities.
            </p><p>Directed by its philosophy of participation and collaboration, KDF focuses on creating long-lasting development through
                an integrated approach that supports communities to become self-reliant and regain control over their lives.
            </p><p>In addressing various community problems, KDF use participatory, equity, inclusion
            and right based means to work with strategic stakeholders including vulnerable and
            marginalized groups such as People with disabilities, women and children among
            others to increase joint efforts, co-operation, project sustainability, effective change
            making and as a means of creating a louder voice for change and mutual support in
            addressing community problems</p>

        </div>
        <div class="span6">
            <h2>Our Skills</h2>
            <div>
                <div class="progress"><div class="bar" style="width: 80%; text-align:left; padding-left:10px;">Basic Services</div></div>
                <div class="progress progress-warning"><div class="bar" style="width: 60%; text-align:left; padding-left:10px;">Food & Income Security</div></div>
                <div class="progress progress-success"><div class="bar" style="width: 90%; text-align:left; padding-left:10px;">Community Health</div></div>
                <div class="progress progress-info"><div class="bar" style="width: 60%; text-align:left; padding-left:10px;">Environmental Management & Protection</div></div>
                <div class="progress progress-danger"><div class="bar" style="width: 70%; text-align:left; padding-left:10px;">Peace Building Initiatives</div></div>
                <div class="progress progress-success"><div class="bar" style="width: 40%; text-align:left; padding-left:10px;">Governance & Civil Society Strengthening</div></div>
            </div>
        </div>
    </div>

    <hr>

    <!-- Meet the team -->
    <h1 class="center">Meet the Team</h1>

    <hr>

    <div class="row-fluid">
        <div class="span3">
            <div class="img-rounded">
                <p> <img class="img-rounded img- thumbnail icon-align-center "  alt=" " src="{{asset('images/portfolio/thumb/kifutumo.jpg')}}" style="width: 160px; height: 200px"></p>
                <h5> Dr. KIFUTUMO, Francis J</h5>
                <p><strong>CEO</strong><br>Msc Health Management</p>
                <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
            </div>
        </div>

        <div class="span3">
            <div class="img-rounded">
                <p> <img class="img-rounded img- thumbnail icon-align-center"  alt=" " src="{{asset('images/portfolio/thumb/kifutumo.jpg')}}" style="width: 160px; height: 200px"></p>
                <h5>KIFUTUMO, David J.</h5>
                <p><strong>Director</strong><br>vvhvhgg</p>
                <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
            </div>
        </div>

        <div class="span3">
            <div class="img-rounded">
                <p> <img class="img-rounded img- thumbnail icon-align-center"  alt=" " src="{{asset('images/portfolio/thumb/mrs.jpg')}}" style="width: 160px; height: 200px"></p>
                <h5>YUNGE, Subira Y</h5>
                <p><strong>Adminstration Officer</strong><br>Bsc In Bussiness Adminstration</p>
                <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
            </div>
        </div>

        <div class="span3">
            <div class="img-rounded">
                <p> <img class="img-rounded img- thumbnail icon-align-center"  alt=" " src="{{asset('images/portfolio/thumb/1.jpg')}}" style="width: 160px; height: 200px"></p>
                <h5>YUNGE, Amani Y</h5>
                <p><strong>Infomation Technology Technician</strong><br>Bsc In Computer Science</p>
                <a class="btn btn-social btn-facebook" href="https://www.facebook.com/amani.yunge"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="https://plus.google.com/u/1/113512598133517047997/about"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
            </div>
        </div>
    </div>
    <p>&nbsp;</p>
    <p></p>
    <hr>

    <div class="row-fluid">
        <div class="span6">
            <h3>Vision</h3>
            <p>KDF’s vision is sustainable improved quality of life for disadvantaged communities in Tanzania.</p><br>
                <strong>This vision is supported by four pillars:</strong>
                <li>Community Participation,</li>
               <li>Gender Equity</li>
            <li> Sustainability</li>
            <li>Capacity Building and Empowerment</li>
        </div>
        <div class="span6">
            <h3>Mission</h3>
            <p>KDF’s mission is to support livelihood challenged communities to sustainably improve their standard
                of living through community empowerment approaches in partnership with stakeholders.</p><br>
            <strong>Core Values</strong>
            <li>Compassion for livelihood-challenged communities</li>
            <li>Community-centered sustainable solutions</li>
            <li>Respect for all stakeholders</li>
            <li> Partnership, with shared responsibilities</li>
            <li>Integrity in all what we do</li>
            <li>Efficiency in resource utilization</li>
        </div>
    </div>
</section>
@stop