                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <!--Categories-->
                            @include('widgets.widget_category')

                        <!-- ##### Single Widget Area ##### -->
                        <!--Latest Posts-->
                            @include('widgets.widget_latestpost')

                        <!-- ##### Single Widget Area ##### -->
                            <!--Archives-->
                            @include('widgets.widget_archivepost')

                        <!-- ##### Single Widget Area ##### -->
                        <!--Tags-->
                            {{-- @include('layouts.tag') --}}
                            @include('widgets.widget_tag')
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