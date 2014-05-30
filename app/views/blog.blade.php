@extends('master')

@section('content')
<?php

if(isset($_GET['cat'])){
    $post = Post::where('category',$_GET['cat'])->orderBy('created_at','desc')->paginate(5);

}
else
{
    $post = Post::orderBy('created_at','desc')->paginate(5);
}

?>
<section class="title">
    <div class="container">
        <div class="row-fluid" >
            <div class="span6">
                <h1>Blog</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span8">
            <div class="blog">
                @if($post->count() != 0)
                @foreach($post as $po)
                <div class="blog-item well">
                    <a href="#"><h2>{{ $po->name }}</h2></a>
                    <div class="blog-meta clearfix">
                        <p class="pull-left">
                            <i class="icon-user"></i> by <a href="#">{{ User::find($po->user_id)->firstname }}</a> |
                            <i class="icon-folder-close"></i> Category <a href="#">{{ Category::find($po->category)->name }}</a> |
                            <i class="icon-calendar"></i> {{ date ('M S, Y',strtotime($po->created_at)) }}
                        </p>

                    </div>
                    <p>
                        {{ HTML::image("uploads/rooms/{$po->img1}","",array("class"=>"img-responsive img-rounded","style"=>"width:100%;padding-bottom:15px")) }}
                    </p>
                    <p>{{ $po->discr }}</p>
                </div>
                <!-- End Blog Item -->

                <div class="gap"></div>

                @endforeach
                @else
                <h3>No Blog Posts</h3>
                @endif

                {{$post->appends(Request::except('page'))->links() }}
            </div>
        </div>
        <aside class="span4">
            <div class="widget search">
                <form>
                    <input type="text" class="input-block-level" placeholder="Search">
                </form>
            </div>
            <!-- /.search -->


            <div class="widget widget-popular">
                <h3>Recent Posts</h3>
                <div class="widget-blog-items">
                    @foreach(Post::orderBy('created_at','DESC')->limit(5)->get() as $post )
                    <div class="widget-blog-item media">
                        <div class="pull-left">
                            <div class="date">
                                <span class="month">{{ date('M',strtotime($post->created_at)) }}</span>
                                <span class="day">{{ date('d',strtotime($post->created_at)) }}</span>
                            </div>
                        </div>
                        <div class="media-body">
                            <a href="#"><h5>{{ $post->name }}</h5></a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- End Popular Posts -->

            <div class="widget">
                <h3>Blog Categories</h3>
                <div>
                    <div class="row-fluid">
                        <div class="span9">
                            @if(Category::all()->count() != 0 )
                            <ul class="unstyled">
                                @foreach(Category::all() as $cats)
                                <li><a href="#">{{ $cats->name }}</a></li>
                                @endforeach
                            </ul>
                            @else
                            <h3>No Categories Defined Yet</h3>
                            @endif
                        </div>


                    </div>

                </div>
            </div>
            <!-- End Category Widget -->


        </aside>
    </div>

</section>


@stop