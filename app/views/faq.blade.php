@extends('master')

@section('content')

<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Frequently Asked Questions</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="{{url('/')}}">Home</a> <span class="divider">/</span></li>
                    <li><a href="{{url('faq')}}"></a> <span class="divider"></span></li>
                    <li class="active">Frequently Asked Questions</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="faqs" class="container">
    <ul class="faq">
        <li>
            <span class="number">01</span>
            <div>
                <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h4>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            </div>
        </li>
</ul>
    </section>
@stop