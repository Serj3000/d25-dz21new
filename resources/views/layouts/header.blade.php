        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Search Form -->
                            <div class="search-form">
                                <form action="#" method="get">
                                    <input type="search" name="search" class="form-control" placeholder="Search and hit enter...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>

                            <!-- Social Button -->
                            <div class="top-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                            <a href="{{route('admin-login-get.blog')}}"><i aria-hidden="true">Login</i></a>
                            <a href="{{route('admin-logout.blog')}}"><i aria-hidden="true">Logout</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{\Illuminate\Support\Facades\Auth::user()}}