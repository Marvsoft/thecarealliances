@extends('ui::layouts.index')

@section('content-wrapper')
    @if (isset($search))
    <section class="about home-about serach-result">
        <div class="container" >
            <div class="row gy-3">
                @foreach ($search as $item)
                    <div class="col-lg-4 col-md-6 col-6">
                        <a href="#">
                            <figure class="img-card">
                                <figcaption class="text">
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
