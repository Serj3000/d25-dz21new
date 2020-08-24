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
                    @include('sidebars.sidebar_archive')

            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->
@endsection