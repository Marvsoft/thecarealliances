@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.who-am-i.title') }}
@stop

@section('content-wrapper')
    <div class="content full-page">
        <div style="display:inine-block;">
            <h1>
                {{ Breadcrumbs::render('posts') }}

                {{ __('admin::app.who-am-i.title') }}
            </h1>
            <a href="{{ route('admin.who-am-i.create') }}" class="btn btn-md btn-primary">
                {{ __('admin::app.who-am-i.create-btn') }}
            </a>
        </div>
    </div>
@stop
