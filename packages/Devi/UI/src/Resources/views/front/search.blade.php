@extends('ui::layouts.index')

@section('content-wrapper')
    @if (isset($search))
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
                @foreach ($search as $item)
                    <div class="col-md-3">
                        <a href="./who-am-i.html">
                            <figure class="img-card">
                                <div class="image">
                                    <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt="image" />
                                </div>

                                <figcaption style="color:black;">
                                    <h4>{{ $item->name }}</h4>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection
