@extends('admin::layouts.master')

@section('page_title')
    {{ __('Sub Category') }}
@stop

@section('content-wrapper')
    <div class="content full-page adjacent-center">
        {!! view_render_event('admin.category.create.header.before') !!}

        <div class="page-header">

            {{ Breadcrumbs::render('who-am-i.sub-category.create') }}

            <div class="page-title">
                <h1>{{ __('admin::app.who-am-i.sub-category-create') }}</h1>
            </div>
        </div>

        {!! view_render_event('admin.category.create.header.after') !!}

        <form
            method="POST"
            action="{{ route('admin.who-am-i.sub-category.update') }}"
            @submit.prevent="onSubmit"
        >
            <div class="page-content">
                <div class="form-container">

                    <div class="panel">
                        <div class="panel-header">
                            <button type="submit" class="btn btn-md btn-primary">
                                {{ __('admin::app.who-am-i.save-btn') }}
                            </button>

                            <a href="{{ route('admin.category.index') }}">
                                {{ __('admin::app.who-am-i.back-btn') }}
                            </a>
                        </div>

                        <tabs>
                            <tab name="{{ __('admin::app.who-am-i.general') }}" :selected="true">
                                @csrf()

                                <input type="hidden" name="id" value="{{ $sub_cat->id }}"> 
                                <div class="form-group" :class="[errors.has('header') ? 'has-error' : '']">
                                    <label class="required">
                                        {{ __('admin::app.who-am-i.header') }}
                                    </label>

                                    <input
                                        type="text"
                                        name="header"
                                        class="control"
                                        value="{{ old('header',$sub_cat->header) }}"
                                        placeholder="{{ __('admin::app.who-am-i.header') }}"
                                        v-validate="'required'"
                                        data-vv-as="{{ __('admin::app.who-am-i.header') }}"
                                    />

                                    <span class="control-error" v-if="errors.has('header')">
                                        @{{ errors.first('header') }}
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label class="required">
                                        {{ __('admin::app.who-am-i.status') }}
                                    </label>

                                    <label class="switch">
                                        <input
                                            type="checkbox"
                                            name="status"
                                            class="control"
                                            id="status"
                                            {{ old('status',$sub_cat->status) ? 'checked' : '' }}
                                        />
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                                <div class="form-group" :class="[errors.has('who_am_i_page_id') ? 'has-error' : '']">
                                    {{ __('admin::app.category.title') }}

                                    <select
                                        class="control"
                                        id="who_am_i_page_id"
                                        name="who_am_i_page_id"
                                        v-validate="'numeric'"
                                        data-vv-as="{{ __('admin::app.category.who_am_i_page_id') }}"
                                    >
                                        <option value="0"></option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $sub_cat->who_am_i_page_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->header }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <span class="control-error" v-if="errors.has('who_am_i_page_id')">
                                        @{{ errors.first('who_am_i_page_id') }}
                                    </span>
                                </div>

                                <div class="form-group" :class="[errors.has('description') ? 'has-error' : '']">
                                    <label
                                        for="description"
                                        class="required"
                                        style="margin-bottom: 10px"
                                    >
                                        {{ __('admin::app.who-am-i.description') }}
                                    </label>

                                    <textarea
                                        name="description"
                                        class="control"
                                        id="description"
                                        v-validate="'required'"
                                        data-vv-as="&quot;{{ __('admin::app.who-am-i.description') }}&quot;"
                                    >
                                        {{ old('description',$sub_cat->description) }}
                                    </textarea>

                                    <span class="control-error" v-if="errors.has('description')">
                                        @{{ errors.first('description') }}
                                    </span>
                                </div>
                            </tab>
                        </tabs>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
@push('scripts')
    <script src="{{ asset('vendor/Devi/admin/assets/js/tinyMCE/tinymce.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            tinymce.init({
                selector: '#description',

                height: 200,

                width: "100%",

                plugins: 'image imagetools media wordcount save fullscreen code table lists link hr',

                toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor link hr | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent  | removeformat | code | table',

                image_advtab: true,
            });
        });
    </script>
@endpush
