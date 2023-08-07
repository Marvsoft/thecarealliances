@extends('ui::layouts.index')

@section('content-wrapper')
    @if (isset($search))
    <section class="about home-about">
        <div class="container" style="margin-top:100px;">
            <div class="row gy-3">
                @foreach ($search as $item)
                    <div class="col-md-3">
                        <a href="#">
                            <figure class="img-card">
                                <figcaption style="color:black; text-align:center;">
                                    <h4>{{ $item->name }}</h4>
                                    <span>{{ $item->address }}</span><br>
                                    <span>{{ $item->city }}</span><br>
                                    <span>{{ $item->state }}</span><br>
                                    <span>{{ $item->zip_code }}</span><br>
                                    <span>{{ $item->phone }}</span>
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
