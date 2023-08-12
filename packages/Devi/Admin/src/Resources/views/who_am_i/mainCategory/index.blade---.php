@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.who-am-i.main-category') }}
@stop

@section('content-wrapper')
    <div class="content full-page">
        <h1>
            {{ Breadcrumbs::render('who-am-i.main-category') }}

            {{ __('admin::app.who-am-i.main-category') }}
        </h1>

        <a href="{{ route('admin.who-am-i.main-category.create') }}" class="btn btn-md btn-primary">
            {{ __('admin::app.who-am-i.create-btn') }}
        </a>
        <!-- Personal Growth and Learning  -->
        <div class="row g-5">
            @foreach($whomICategories as $val)
            <div class="col-4">
                <div class="wrapper">
                    <div class="form-group heading">
                        <!-- <input type="checkbox" id="checkbox2"> -->
                        <label for="checkbox2">{{ $val->header }} </label>
                    </div>
                    <div class="seprate">
                        @foreach($val->getSubCategory as $subcat)
                        
                            <div class="form-group">
                                <!-- <input type="checkbox" id="checkbox2"> -->
                                <label for="checkbox2">{{ $subcat->header }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop
