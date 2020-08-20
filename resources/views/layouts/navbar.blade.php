
                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{route('index.blog')}}">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('index.blog')}}">Home</a></li>
                                            <li><a href="{{route('archive-blog.blog')}}">Archive Blog</a></li>
                                            <li><a href="{{route('singl-post.blog', ['id'=>1])}}">Single Post</a></li>
                                            <li><a href="{{route('about-us.blog')}}">About</a></li>
                                            <li><a href="{{route('contact.blog')}}">Contact</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Catagories</a>
                                        <div class="dropdown">
                                            <ul class="single-mega cn-col-4">
                                            @foreach(\App\Category::all() as $category)
                                                <li><a href="{{route('category.blog', ['category' => $category->id])}}">- {{$category->name}}</a></li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="{{route('laravel.blog')}}">Laravel</a></li>
                                    <li><a href="{{route('about-us.blog')}}">About</a></li>
                                    <li><a href="{{route('contact.blog')}}">Contact</a></li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>