{{-- @extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.resources.title') }}
@stop

@section('content-wrapper')
    <div class="content full-page">
        <table-component data-src="{{ route('admin.customers.index') }}">
            <template v-slot:table-header>
                <h1>
                    {{ __('admin::app.resources.title') }}
                </h1>
            </template>
        <table-component>
    </div>
@stop --}}
@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.alliance.title') }}
@stop

@section('content-wrapper')
    <div class="content full-page">
        <table-component data-src="{{ route('admin.customers.index') }}">
            <template v-slot:table-header>
                <h1>
                    {{ __('admin::app.alliance.title') }}
                </h1>
            </template>
            <template v-slot:table-action>
                <a href="{{ route('admin.alliance.create') }}" class="btn btn-md btn-primary">
                    {{ __('admin::app.alliance.create-btn') }}
                </a>
            </template>
        <table-component>
    </div>
@stop
