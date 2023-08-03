@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.posts.create-title') }}
@stop

@section('content-wrapper')
    <div class="content full-page adjacent-center">
        <div class="page-header">

            {{-- {{ Breadcrumbs::render('posts.create') }} --}}

            <div class="page-title">
                <h1>Create New</h1>
            </div>
        </div>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
       </ul>

        <form
            method="post"
            action="{{ route('admin.alliance.edit') }}"
            @submit.prevent="onSubmit"
        >
            @csrf()
            <div class="page-content">
                <div class="form-container">
                    <div class="panel">
                        <div class="panel-header">
                            <button type="submit" class="btn btn-md btn-primary">
                                Save
                            </button>
                        </div>

                        <div class="form-group" :class="[errors.has('title') ? 'has-error' : '']">
                            <label class="required">
                                {{ __('header') }}
                            </label>

                            <input
                                type="text"
                                name="header"
                                class="control"
                                value="{{ old('header') }}"
                                placeholder="{{ __('Header') }}"
                                v-validate="'required'"
                                data-vv-as="{{ __('Header') }}"
                            />

                            <span class="control-error" v-if="errors.has('title')">
                                @{{ errors.first('title') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label class="required">
                                {{ __('admin::app.posts.status') }}
                            </label>

                            <label class="switch">
                                <input
                                    type="checkbox"
                                    name="status"
                                    class="control"
                                    id="status"
                                    v-validate="'required'"
                                    data-vv-as="&quot;{{ __('admin::app.posts.content') }}&quot;"
                                    {{ old('status') ? 'checked' : '' }}
                                />
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label
                                for="content"
                                style="margin-bottom: 10px"
                            >
                                Description
                            </label>

                            <textarea
                                name="description"
                                class="control"
                                id="description"
                            >
                                {{ old('description') }}
                            </textarea>

                            <span class="control-error" v-if="errors.has('content')">
                                @{{ errors.first('content') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
