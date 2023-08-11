@extends('ui::layouts.index')

@section('content-wrapper')

    <section class="hero">
        <div class="container">
            <div class="text">
                <h1>The Care Alliances</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic sequi aperiam aliquam velit dolorem
                    ducimus
                    provident? Minus aliquid ab eos veniam expedita? Non quam quos sed at odio temporibus perspiciatis.
                </p>
            </div>
        </div>
    </section>

    <section class="about home-about">
        <div class="container">
            <div class="title">
                <h3>Life Goals, Dreams, Hopes, and Improvement Sections
                    <span>
                        "We Need Each Other"
                    </span>
                </h3>
            </div>
            <div class="row gy-3">
                <div class="col-lg-3  col-md-4 col-12">
                    <a href="{{ route('ui.front.who-am-i') }}">
                        <figure class="img-card">
                            <div class="image"><img src="{{ asset('images/banner.jpg')}}" alt="image" /></div>
                            <figcaption style="background:rgb(0 30 108 / 80%);">
                                <h4>Who Am I? Change Your Life </h4>
                            </figcaption>

                        </figure>
                    </a>
                </div>
                <div class="col-lg-3  col-md-4 col-12">
                    <a href="{{ route('ui.front.i-can-help') }}">
                        <figure class="img-card">
                            <div class="image"><img src="{{ asset('images/2.jpg')}}" alt="image" /></div>
                            <figcaption style="background:rgb(0 30 108 / 80%);">
                                <h4>I Can Help</h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3  col-md-4 col-12">
                    <a href="{{ route('ui.front.i-need-help') }}">
                        <figure class="img-card">
                            <div class="image"><img src="{{ asset('images/3.jpg')}}" alt="image" /></div>
                            <figcaption style="background:rgb(0 30 108 / 80%);">
                                <h4>I Need Help[Resources] </h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3  col-md-4 col-12">
                    <a href="{{ route('ui.front.share-experiences') }}">
                        <figure class="img-card">
                            <div class="image"><img src="{{ asset('images/4.jpg')}}" alt="image" /></div>
                            <figcaption style="background:rgb(0 30 108 / 80%);">
                                <h4>Share My Experiences</h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3  col-md-4 col-12">
                    <a href="{{ route('ui.front.create-new-community') }}">
                        <figure class="img-card">
                            <div class="image"><img src="{{ asset('images/5.jpg')}}" alt="image" /></div>
                            <figcaption style="background:rgb(0 30 108 / 80%);">
                                <h4>Find Your Community </h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3  col-md-4 col-12">
                    <a href="{{ route('ui.front.create-your-plan') }}">
                        <figure class="img-card">
                            <div class="image"><img src="{{ asset('images/6.jpg')}}" alt="image" /></div>
                            <figcaption style="background:rgb(0 30 108 / 80%);">
                                <h4>Create A Plan </h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3  col-md-4 col-12">
                    <a href="{{ route('ui.front.edutainment-culture-and-lifestyle') }}">
                        <figure class="img-card">
                            <div class="image"><img src="{{ asset('images/7.jpg')}}" alt="image" /></div>
                            <figcaption style="background:rgb(0 30 108 / 80%);">
                                <h4>Edutainment,Culture & Lifestyle </h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3  col-md-4 col-12">
                    <a href="{{ route('ui.front.mentoring-portal')}}">
                        <figure class="img-card">
                            <div class="image"><img src="{{ asset('images/8.jpg')}}" alt="image" /></div>
                            <figcaption style="background:rgb(0 30 108 / 80%);">
                                <h4>The Mentoring Portals </h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="tv-show">
        <div class="container">
            <div class="title">
                <h3>THE CARE ALLIANCE TV </h3>
            </div>
            <div class="row g-5">
                <div class="col-md-4">
                    <div class="videos">
                         <iframe src="https://www.youtube.com/embed/39ILoDWK-P4" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <a href="">
                            <button class="btn-primary">Edutainment</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="videos">
                         <iframe src="https://www.youtube.com/embed/39ILoDWK-P4" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <a href="">
                            <button class="btn-primary">Edutainment</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="videos">
                        <iframe src="https://www.youtube.com/embed/39ILoDWK-P4" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <a href="">
                            <button class="btn-primary">Edutainment</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="videos">
                        <iframe src="https://www.youtube.com/embed/39ILoDWK-P4" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <a href="">
                            <button class="btn-primary">Edutainment</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="videos">
                        <iframe src="https://www.youtube.com/embed/39ILoDWK-P4" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <a href="">
                            <button class="btn-primary">Edutainment</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="videos">
                        <iframe src="https://www.youtube.com/embed/39ILoDWK-P4" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <a href="">
                            <button class="btn-primary">Edutainment</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
