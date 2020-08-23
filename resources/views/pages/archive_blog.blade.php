@extends('layouts.layout')

{{-- @push('style')
    <link href="{{ asset('http://hillel-25new/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('http://hillel-25new/js/active.js') }}" rel="script">
@endpush --}}

@section('blog')
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="/img/core-img/breadcrumb-line.png" alt="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Archive</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Featured Post Area -->
                        <div class="featured-posts">
                            <a href="#"><img src="/img/blog-img/1.jpg" alt=""></a>
                            <!-- Featured Post Content -->
                            <div class="featured-post-content">
                                <p>MAY 8, 2018 / foody</p>
                                <a href="#" class="post-title">
                                    <h2>Quick Vegan Enchiladas with Sweet Potato Sauce</h2>
                                </a>
                            </div>
                        </div>

                    <!-- Single Blog Post -->
@include('layouts.post')

                    </div>

                    <!-- Pager -->
{{ $params->links('layouts.paginate', ['params'=>$params]) }}
                    
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <!--Search Form-->
                            @include('sidebars.widget_searchform')

                        <!-- ##### Single Widget Area ##### -->
                        <!--About Me-->
                            @include('sidebars.widget_aboutme')

                        <!-- ##### Single Widget Area ##### -->
                        <!--Categories-->
                            @include('sidebars.widget_category')

                        <!-- ##### Single Widget Area ##### -->
                        <!--Lastest Posts-->
                            @include('sidebars.widget_latestpost')

                        <!-- ##### Single Widget Area ##### -->
                        <!--Adds-->
                            @include('sidebars.widget_add')

                        <!-- ##### Single Widget Area ##### -->
                        <!--Archives-->
                            @include('sidebars.widget_archivepost')

                        <!-- ##### Single Widget Area ##### -->
                        <!--Tags-->
                            {{-- @include('layouts.tag') --}}
                            @include('sidebars.widget_tag')
                        {{-- <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>popular tags</h6>
                            </div>
                            <!-- Tags -->
                            <ol class="popular-tags d-flex flex-wrap">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Unique</a></li>
                                <li><a href="#">Template</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">travel</a></li>
                                <li><a href="#">lifestyle</a></li>
                                <li><a href="#">Wordpress Template</a></li>
                                <li><a href="#">food</a></li>
                                <li><a href="#">Idea</a></li>
                            </ol>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->
@endsection