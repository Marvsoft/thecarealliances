@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.category.title') }}
@stop

@section('content-wrapper')
    <div class="content full-page">
        <table-component data-src="{{ route('admin.category.index') }}">
            <template v-slot:table-header>
                <h1>
                    {{ Breadcrumbs::render('category') }}

                    {{ __('admin::app.category.title') }}
                </h1>
            </template>

            @if (bouncer()->hasPermission('posts'))
                <template v-slot:table-action>
                    <a href="{{ route('admin.category.create') }}" class="btn btn-md btn-primary">
                        {{ __('admin::app.category.create-title') }}
                    </a>
                </template>
            @endif
        <table-component>
    </div>
@stop
