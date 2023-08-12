@extends('ui::layouts.index')

@section('content-wrapper')

    <section class="hero">
        <div class="container">
            <div class="text">
                <h1>Our Blogs</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic sequi aperiam aliquam velit dolorem
                    ducimus
                    provident? Minus aliquid ab eos veniam expedita? Non quam quos sed at odio temporibus perspiciatis.
                </p>
            </div>
        </div>
    </section>


    <section id="blog" class="blog-list">
        <div class="container">
            <div class="title">
                <h3>Latest Blogs</h3>
            </div>
            <div class="row entries">

                @foreach ($blogs as $blog)
                    <div class="col-md-4">
                        <article class="blog-item ">

                            <div class="blog-item-img">
                                <img src="./assets/imgs/blog-3.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="blog-item-title">
                                <a href="{{ route('ui.front.blog_detail', $blog->slug) }}">
                                    {{ $blog->title }}
                                </a>
                            </h2>


                            <div class="blog-item-content">
                                <p class="limited-paragraph">
                                    {{ Str::words(strip_tags($blog->content), 50, '...') }}
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('ui.front.blog_detail', $blog->slug) }}">Read More</a>
                                </div>
                            </div>

                        </article>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
@endsection
