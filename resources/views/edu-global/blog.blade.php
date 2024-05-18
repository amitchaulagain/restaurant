@extends('weblayouts.app')

@section('content_box')

    <main class="main" style="margin-top: 80px">

        <div class="container" >
            <div class="row">

                <div class="col-lg-8">

                    <!-- Blog Details Section -->
                    <div id="blog-details" class="blog-details section">
                        <div class="container">

                            <article class="article">

                                <div class="post-img">
                                    <img src="{{ asset('/public/images/uploads/posts/' . $post['post_image']) }}" alt="" class="img-fluid">
                                </div>

                                <h2 class="title">{{$post->title}}</h2>

                                <p>
                                    {!! $post->body !!}
                                </p>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-details.html">Admin</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-details.html">
                                                <time datetime="2020-01-01">Jan 1, 2023</time>
                                            </a></li>
                                    </ul>
                                </div><!-- End meta top -->

                                <div class="content">


                                </div><!-- End post content -->

                                <div class="meta-bottom">
                                    <i class="bi bi-folder"></i>
                                    <ul class="cats">
                                        <li><a href="#">Business</a></li>
                                    </ul>

                                    <i class="bi bi-tags"></i>
                                    <ul class="tags">
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Tips</a></li>
                                        <li><a href="#">Marketing</a></li>
                                    </ul>
                                </div><!-- End meta bottom -->

                            </article>

                        </div>
                    </div><!-- /Blog Details Section -->

                </div>

                <div class="col-lg-4 sidebar">

                    <div class="widgets-container">

                        <!-- Search Widget -->
                        <div class="search-widget widget-item">

                            <h3 class="widget-title">Search</h3>
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>

                        </div><!--/Search Widget -->

                        <!-- Categories Widget -->
                        <div class="categories-widget widget-item">

                            <h3 class="widget-title">Recent Blogs</h3>
                            <ul class="mt-3">
                                @foreach ($posts as $item)
                                    <div class="meta-top">
                                        <h6 style="color: orange"><a href="/blog?id={{$item->id}}">{{$item->title}}<span
                                                    class="icon-calendar"></span> </a></h6>

                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="blog-details.html">&nbsp;&nbsp;&nbsp;John Doe</a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="blog-details.html">
                                                    <time datetime="2020-01-01">&nbsp;&nbsp;&nbsp;Jan 1, 2022</time>
                                                </a></li>
                                            <br>
                                        </ul>
                                    </div>
                                @endforeach
                            </ul>

                        </div><!--/Categories Widget -->

                        <!-- Tags Widget -->
                        <div class="tags-widget widget-item">

                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>

                        </div><!--/Tags Widget -->

                    </div>

                </div>

            </div>
        </div>

    </main>

    <!-- Scroll Top -->

@endsection
