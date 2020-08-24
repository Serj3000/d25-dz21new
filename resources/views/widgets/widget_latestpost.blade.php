                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Latest Posts</h6>
                            </div>

                            <!-- Single Latest Posts -->
                            {{-- @foreach(\App\Post::latest()->paginate(5) as $lastPost) --}}
                            @foreach(\App\Post::latest()->limit(5)->get() as $lastPost)

                                <div class="single-latest-post d-flex">
                                    <div class="post-thumb">
                                        <img src="/img/blog-img/lp{{$lastPost->image}}.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="{{route('singl-post.blog', ['id'=>$lastPost->id])}}" class="post-title">
                                            <h6>{{$lastPost->title}}</h6>
                                        </a>
                                        <a href="{{route('author.blog', ['user'=>$lastPost->user->id])}}" class="post-author"><span>by</span> {{$lastPost->user->name}}</a>
                                    </div>
                                </div>
                            @endforeach
