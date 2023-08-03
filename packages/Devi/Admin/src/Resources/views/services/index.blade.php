@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.services.title') }}
@stop

@section('content-wrapper')
    <div class="content full-page">
        <table-component data-src="{{ route('admin.customers.index') }}">
            <template v-slot:table-header>
                <h1>
                    {{ __('admin::app.services.title') }}
                </h1>
            </template>
        <table-component>
    </div>
@stop
