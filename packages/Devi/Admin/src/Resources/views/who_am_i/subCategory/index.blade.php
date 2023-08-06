@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.who-am-i.sub-category-title') }}
@stop

@section('content-wrapper')
    <div class="content full-page">
        <h1>
            {{ Breadcrumbs::render('who-am-i.sub-category') }}

            {{ __('admin::app.who-am-i.sub-category') }}
        </h1>

        <a href="{{ route('admin.who-am-i.sub-category.create') }}" class="btn btn-md btn-primary">
            {{ __('admin::app.who-am-i.create-btn') }}
        </a>
    </div>
@stop
