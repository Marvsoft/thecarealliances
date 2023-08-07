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
                                <figcaption style="color:black;">
                                    {{-- <h4>{{ $item->name }}</h5>
                                    <h5>{{ $item->address }}</h5>
                                    <h5>{{ $item->city }}</h5>
                                    <h5>{{ $item->state }}</h5>
                                    <h5>{{ $item->zip_code }}</h5>
                                    <h5>{{ $item->phone }}</h5> --}}
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
