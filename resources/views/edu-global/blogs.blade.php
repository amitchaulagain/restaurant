@extends('weblayouts.app')

@section('content_box')

    <!-- Page Title -->
    <main class="main" style="margin-top: 80px">


        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">

            <div class="container">
                <div class="row gy-4">
                    @foreach ($posts_tax_tips as $post)

                    <div class="col-lg-4">
                        <article>

                            <div class="post-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">{{$post->excerpt}}</p>

                            <h2 class="title">
                                <a href="/blog?id={{$post->id}}">{{$post->title}}</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author"><a href="/blog?id={{$post->id}}">Admin</a></p>
                                    <p class="post-date">
                                    <div><a href="/blog?id={{$post->id}}">{{$post->created_at}}</a></div>

                                    </p>
                                </div>
                            </div>

                        </article>
                    </div>
                    @endforeach
                    <!-- End post list item -->
                </div>
            </div>

        </section><!-- /Blog Posts Section -->

    </main>

@endsection
