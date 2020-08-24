                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Popular tags</h6>
                            </div>
                            <!-- Tags -->
                            <ol class="popular-tags d-flex flex-wrap">
                                @foreach(\App\Tag::all() as $tag)
                                    <li><a href="{{route('tag.blog', ['tag'=>$tag->id])}}">{{$tag->name}}</a></li>
                                @endforeach
                            </ol>
                        </div>