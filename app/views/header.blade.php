<!--Header-->
<header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a id="logo" class="pull-left" href="/"></a>
            <div class="nav-collapse collapse pull-right">
                <ul class="nav">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('about-us')}}">About</a></li>
                    <li><a href="{{url('services')}}">Services</a></li>
                    <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('career')}}">Career</a></li>
                            <li><a href="{{url('faq')}}">FAQ</a></li>
                            <li><a href="{{url('reg')}}">Registration</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('policy')}}">Privacy Policy</a></li>
                            <li><a href="{{url('terms')}}">Terms of Use</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('blog')}}">Blog</a></li>
                    <li><a href="{{url('contact-us')}}">Contacts</a></li>
                    <li class="login">
                        <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>
<!-- /header -->