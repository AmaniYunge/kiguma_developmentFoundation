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
            <p>Your generous contribution is a gift of life for many. It will help hundreds of children
                    in rural communities in Africa escape the ravages of HIV/AIDS and other diseases
                    including malnutrition and hunger. Your contribution will help fight the problems of
                    drought and also support KDF's maternal health and self-help projects.</p><br>
                    Here's what your financial contribution does:

                  <h3>CHILD SURVIVAL:</h3>
                   <strong>Give a child life and a healthy head start toward success. (The cost is estimated for
                       one year only)</strong>


                    <li>Immunize 20 children&nbsp;&nbsp; $200</li>
                    <li>  Feed and medicate a child&nbsp;&nbsp;$150</li>
                    <li> Feed, cloth and educate an orphan&nbsp;&nbsp; $200</li>
                    <br>

            <h3>SAFE MOTHERHOOD:</h3>
                  The health of the mother affects the baby, provide for good pre and post natal care.
            <li> Provide medicines and commodities for Home-based Care for chronically ill
                patient (one year) &nbsp;&nbsp;$500</li>
            <li> Purchase E Ranger (transport for pregnant mothers to health facility)&nbsp;&nbsp; $10,000</li>
            <li>Purchase Land Cruiser for KDF OUTREACH Programs in rural villages&nbsp;&nbsp;$40,000</li>

            <br>

            <h3>EDUCATION:</h3>
            Educate youth to become productive and contributing members of their families,
            communities, and Nation. (The cost is estimated for school fees, uniform, books
            and other supplies.)
            <li>Primary education for orphans &nbsp;&nbsp;$50</li>
            <li>Secondary education for girls and orphans &nbsp;&nbsp;$100</li>
            <li> Vocational and life skills for girls and boys &nbsp;&nbsp;$75</li>
            <li> Vocational and life skills for girls and boys &nbsp;&nbsp; $100</li>
            <li> Provide Scholarship for teacher training (one student) &nbsp;&nbsp;  $80</li>
            <li>Scholarship for nursing student &nbsp;&nbsp;   $1,600</li>


        </div>
        <div class="span6">
            <div>
                <img class="img-rounded img- thumbnail icon-align-center"  alt=" " src="{{asset('images/portfolio/thumb/item1.jpg')}}" style="width: 440px; height: 300px; box-shadow: 5px 5px 10px #888888">
            </div>
            <br>
            <div class="row-fluid">
                <h3>WATER INITIATIVE:</h3>
                <li> (Provide safe, clean drinking water for a family)Dig a well&nbsp;&nbsp; $1000</li>
                <li> Provide a solar cooker and utensils for a family&nbsp;&nbsp;  $75</li>
                <li> Construct the KDF Center of Excellence (for vocational programs, health center,training programs ...)&nbsp;&nbsp; $50,000</li>


                <br>
                <strong>Will you help KDF continue its legacy of helping to make a difference in the lives
                    of others</strong>

            </div>
        </div>
        <br><br>
        <div class="button span6">
            <button type="button" class="btn btn-primary pull-right"><a data-toggle="modal" href="#modal-1" style="color: #ffffff">Donate Now</button>
            <div class="desc">
            </div>
            <div id="modal-1" class="modal hide fade">
                <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                <div class="modal-body">
                    <h4 class="modal-title">Donation Form &hellip;</h4>
                    <hr>
                </div>
                <div class="modal-body">
                    <h5>Online Donation process is still in progress but for the time being you can contact with
                        <strong>Dr KIFUTUMO Francis J.</strong>  The CEO of KIGUMA DEVELOPMENT FOUNDATION through:</h5><br>
                    <h3><strong> KIGUMA DEVELOPMENT FOUNDATION,</strong><br>
                        P.o.Box 80, Nkinga-Tabora-TANZANIA.<br>
                        <strong>Hot line:</strong>+255 787 550 250<br>
                        <strong> pskdf@hotmail.com</strong><br>
                        or
                        <p><strong>National Microfinance Bank :</strong> Account<br>
                            No..............................................
                        </p></h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <hr>


</section>
@stop