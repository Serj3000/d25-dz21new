@extends('layouts.layout')

@section('blog')
{{-- @parent --}}
    <!-- ##### Hero Area Start ##### -->
        <!-- Hero Post Slides -->
        @include('slides.post_slide')
    
    <!-- ##### Blog Content Area Start ##### -->
        <!-- Hero Post Carousel -->
        @include('slides.post_carousel')

            <div class="row justify-content-center">

                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Hero Post -->
                        @include('layouts.post')

                    </div>

                    <!-- Pager -->
                    {{ $params->links('layouts.paginate', ['params'=>$params]) }}

                </div>

                <!-- Blog Sidebar Area -->
                    @include('sidebars.sidebar_index')



            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->
@endsection