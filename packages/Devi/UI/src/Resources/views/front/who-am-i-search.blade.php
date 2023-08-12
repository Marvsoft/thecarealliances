@extends('ui::layouts.index')

@section('content-wrapper')

    <section class="hero">
        <div class="container">
            <div class="text">
                <h1>Who Am I?</h1>
            </div>
        </div>
    </section>
    <section class="about home-about">
        <div class="container" style="margin-top:100px;">
            <div class="row gy-3">
                @foreach ($whomICategories as $item)
                    <div class="col-md-3">
                        <a href="#">
                            <figure class="img-card">
                                <figcaption style="color:black; text-align:center;">
                                    <h4>{{ $item->header }}</h4>
                                    <p><?php echo $item->description; ?></p><br>
                                    @foreach($item->getSubCategory as $subcat)
                                        <h6>{{ $subcat->header }}</h6>
                                        <p><?php echo $subcat->description; ?></p><br>
                                    @endforeach
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>    
@endsection
