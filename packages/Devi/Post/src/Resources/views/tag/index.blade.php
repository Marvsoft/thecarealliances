@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.tags.title') }}
@stop

@section('content-wrapper')
    <div class="content full-page">
        <table-component data-src="{{ route('admin.tags.index') }}">
            <template v-slot:table-header>
                <h1>
                    {!! view_render_event('admin.tags.index.header.before') !!}

                    {{ Breadcrumbs::render('tags') }}

                    {{ __('admin::app.tags.title') }}

                    {!! view_render_event('admin.tags.index.header.after') !!}
                </h1>
            </template>

            @if (bouncer()->hasPermission('tags'))
                <template v-slot:table-action>
                    <a href="{{ route('admin.tags.create') }}" class="btn btn-md btn-primary">
                        {{ __('admin::app.tags.create-title') }}
                    </a>
                </template>
            @endif
        <table-component>
    </div>
@stop
