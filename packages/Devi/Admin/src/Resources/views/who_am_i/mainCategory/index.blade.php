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
    </div>
@stop
