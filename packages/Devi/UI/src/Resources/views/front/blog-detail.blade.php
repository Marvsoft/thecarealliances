@extends('ui::layouts.index')

@section('content-wrapper')

    <section class="hero">
        <div class="container">
            <div class="text">
                <h1>Blog Deatils</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic sequi aperiam aliquam velit dolorem
                    ducimus
                    provident? Minus aliquid ab eos veniam expedita? Non quam quos sed at odio temporibus perspiciatis.
                </p>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class=" entries">

                <article class="entry entry-single">
                        <div class="entry-img">
                            <img src="./assets/imgs/blog-3.jpg" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            {{ $blog->title }}
                        </h2>

                        <div class="entry-content">
                            <p> {{ strip_tags($blog->content) }} </p>
                        </div>
                </article>

            </div>
        </div>
    </section>
@endsection
