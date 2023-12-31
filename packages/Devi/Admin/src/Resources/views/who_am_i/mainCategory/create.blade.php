@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.who-am-i.main-category') }}
@stop

@section('content-wrapper')
    <div class="content full-page adjacent-center">
        <div class="page-header">

            {{ Breadcrumbs::render('who-am-i.main-category.create') }}

            <div class="page-title">
                <h1>{{ __('admin::app.who-am-i.main-category-create') }}</h1>
            </div>
        </div>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
       </ul>

        <form
            method="post"
            action="{{ route('admin.who-am-i.main-category.store') }}"
            @submit.prevent="onSubmit"
        >
            <div class="page-content">
                <div class="form-container">

                    <div class="panel">
                        <div class="panel-header">
                            <button type="submit" class="btn btn-md btn-primary">
                                {{ __('admin::app.who-am-i.save-btn') }}
                            </button>

                            <a href="{{ route('admin.posts.index') }}">
                                {{ __('admin::app.who-am-i.back') }}
                            </a>
                        </div>

                        <tabs>
                            <tab name="{{ __('admin::app.posts.general') }}" :selected="true">
                                {!! view_render_event('admin.posts.create.form_controls.general.before') !!}

                                @csrf()

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

                                <div
                                    class="form-group"
                                    :class="[errors.has('content') ? 'has-error' : '']"
                                >
                                    <label
                                        for="content"
                                        class="required"
                                        style="margin-bottom: 10px"
                                    >
                                        {{ __('admin::app.posts.content') }}
                                    </label>

                                    <textarea
                                        name="content"
                                        class="control"
                                        id="content"
                                        v-validate="'required'"
                                        data-vv-as="&quot;{{ __('admin::app.posts.content') }}&quot;"
                                    >
                                        {{ old('content') }}
                                    </textarea>

                                    <span class="control-error" v-if="errors.has('content')">
                                        @{{ errors.first('content') }}
                                    </span>
                                </div>

                                {!! view_render_event('admin.posts.create.form_controls.general.after') !!}
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
                selector: '#content',

                height: 200,

                width: "100%",

                plugins: 'image imagetools media wordcount save fullscreen code table lists link hr',

                toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor link hr | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent  | removeformat | code | table',

                image_advtab: true,
            });
        });
    </script>
@endpush
