                        @foreach($params as $post)
                            <div class="single-blog-post d-flex flex-wrap mt-50">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                    <a href="{{route('singl-post.blog', ['id'=>$post->id])}}"><img src="/img/blog-img/{{$post->image}}.jpg" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content mb-50">
                                    <p class="post-date">{{date('M d, Y', strtotime($post->created_at))}} / {{$post->category->name}}</p>
                                    <a href="{{route('singl-post.blog', ['id'=>$post->id])}}" class="post-title">
                                        <h4>{{$post->title}}</h4>
                                    </a>
                                    <div class="post-meta">
                                        <a href="{{route('author.blog', ['user'=>$post->user->id])}}"><span>by</span> {{$post->user->name}}</a>
                                        <a href="#"><i class="fa fa-eye"></i> {{$post->saw}}</a>
                                        <a href="#"><i class="fa fa-comments"></i> 08</a>
                                    </div>
                                    <p class="post-excerpt">{{$post->preview_text}}</p>
                                    {{-- <a href="{{route('singl-post.blog', ['id'=>$post->id])}}" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
                                    <a href="{{route('singl-post.blog', ['id'=>$post->id])}}" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                                <!-- Post Curve Line -->
                                <img class="post-curve-line" src="/img/core-img/post-curve-line.png" alt="no page">
                            </div>   
                        @endforeach