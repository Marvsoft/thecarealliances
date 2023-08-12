@extends('ui::layouts.index')

@section('content-wrapper')

    <section class="hero">
        <div class="container">
            <div class="text">
                <h1>Who Am I?</h1>
            </div>
        </div>
    </section>

    <section class="forms">
        <div class="container">
            <div class="title">
                <h3>
                    Who Am I?
                </h3>
                <p>If you select any of the checkbox, you are at the brighter & positive side. It will reflect you have
                    sound knowledge about yourself. At the end, your report will be generated, based on your selected
                    attributes.
                </p>
            </div>
            <form action="{{ route('ui.front.who-am-i') }}" method="POST" class="form-custom ">
                @csrf
                <div class="row g-5">
                    @foreach($whomICategories as $val)
                    <div class="col-4">
                        <div class="wrapper">
                            <div class="form-group heading">
                                <input type="checkbox" name="cat_id[]" id="checkbox2" value="{{ $val->id }}">
                                <label for="checkbox2">{{ $val->header }} </label>
                            </div>
                            <div class="seprate">
                                @foreach($val->getSubCategory as $subcat)
                                
                                    <div class="form-group">
                                        <input type="checkbox" name="sub_cat_id[]" id="checkbox2" value="{{ $subcat->id }}">
                                        <label for="checkbox2">{{ $subcat->header }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                    <center>
                        <button type="submit" class="btn-primary">Show Result</button>
                    </center>
                </div>
            </form>
            <div>
            </div>

        </div>
    </section>
@endsection
