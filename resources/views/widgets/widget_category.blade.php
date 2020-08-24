                        <!-- ##### Single Widget Area ##### -->
                        <!--Categories-->
                        <!-- <div class="single-widget-area mt-0"> -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Categories</h6>
                            </div>
                            <ol class="foode-catagories">
                                @foreach(\App\Category::all() as $category)
                                    <li><a href="{{route('category.blog', ['slug'=>$category->slug])}}"><span><i class="fa fa-stop" aria-hidden="true"></i> {{$category->name}}</span> <span>({{$category->post->count()}})</span></a></li>
                                @endforeach
                            </ol>
                        </div>
