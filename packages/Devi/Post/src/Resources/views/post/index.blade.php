@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.posts.title') }}
@stop

@section('content-wrapper')
    <div class="content full-page">
        <table-component data-src="{{ route('admin.posts.index') }}">
            <template v-slot:table-header>
                <h1>
                    {!! view_render_event('admin.posts.index.header.before') !!}

                    {{ Breadcrumbs::render('posts') }}

                    {{ __('admin::app.posts.title') }}

                    {!! view_render_event('admin.posts.index.header.after') !!}
                </h1>
            </template>

            @if (bouncer()->hasPermission('posts'))
                <template v-slot:table-action>
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-md btn-primary">
                        {{ __('admin::app.posts.create-title') }}
                    </a>
                </template>
            @endif
        <table-component>
    </div>
@stop
