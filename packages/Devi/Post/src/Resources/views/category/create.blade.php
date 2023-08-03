@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.category.create-title') }}
@stop

@section('content-wrapper')
    <div class="content full-page adjacent-center">
        {!! view_render_event('admin.category.create.header.before') !!}

        <div class="page-header">
            
            {{ Breadcrumbs::render('category.create') }}

            <div class="page-title">
                <h1>{{ __('admin::app.category.create-title') }}</h1>
            </div>
        </div>

        {!! view_render_event('admin.category.create.header.after') !!}

        <form method="POST" action="{{ route('admin.category.store') }}" @submit.prevent="onSubmit">
            <div class="page-content">
                <div class="form-container">

                    <div class="panel">
                        <div class="panel-header">
                            {!! view_render_event('admin.category.create.form_buttons.before') !!}

                            <button type="submit" class="btn btn-md btn-primary">
                                {{ __('admin::app.category.save-btn-title') }}
                            </button>

                            <a href="{{ route('admin.category.index') }}">
                                {{ __('admin::app.category.back') }}
                            </a>

                            {!! view_render_event('admin.category.create.form_buttons.after') !!}
                        </div>

                        <tabs>
                            <tab name="{{ __('admin::app.category.general') }}" :selected="true">
                                {!! view_render_event('admin.category.create.form_controls.general.before') !!}

                                @csrf()
                                
                                <div class="form-group" :class="[errors.has('name') ? 'has-error' : '']">
                                    <label class="required">
                                        {{ __('admin::app.category.name') }}
                                    </label>

                                    <input
                                        type="text"
                                        name="name"
                                        class="control"
                                        value="{{ old('name') }}"
                                        placeholder="{{ __('admin::app.category.name') }}"
                                        v-validate="'required'"
                                        data-vv-as="{{ __('admin::app.category.name') }}"
                                    />

                                    <span class="control-error" v-if="errors.has('name')">
                                        @{{ errors.first('name') }}
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label class="required">
                                        {{ __('admin::app.settings.users.status') }}
                                    </label>

                                    <label class="switch">
                                        <input
                                            type="checkbox"
                                            name="status"
                                            class="control"
                                            id="status"
                                            {{ old('status') ? 'checked' : '' }}
                                        />
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                                <div class="form-group" :class="[errors.has('parent_id') ? 'has-error' : '']">
                                    {{ __('admin::app.category.parent_id') }}
    
                                    <select
                                        class="control"
                                        id="parent_id"
                                        name="parent_id"
                                        v-validate="'numeric'"
                                        data-vv-as="{{ __('admin::app.category.parent_id') }}"
                                    >
                                        <option value="0"></option>
                                        @foreach ($categories as $key => $category)
                                            <option value="{{ $key }}" {{ old('parent_id') == $category ? 'selected' : '' }}>
                                                {{ $category }}
                                            </option>
                                        @endforeach
                                    </select>
    
                                    <span class="control-error" v-if="errors.has('parent_id')">
                                        @{{ errors.first('parent_id') }}
                                    </span>
                                </div>

                                <div class="form-group" :class="[errors.has('slug') ? 'has-error' : '']">
                                    <label class="required">
                                        {{ __('admin::app.tags.slug') }}
                                    </label>

                                    <input
                                        type="text"
                                        name="slug"
                                        class="control"
                                        value="{{ old('slug') }}"
                                        placeholder="{{ __('admin::app.tags.slug') }}"
                                        v-validate="'required'"
                                        data-vv-as="{{ __('admin::app.tags.slug') }}"
                                    />

                                    <span class="control-error" v-if="errors.has('slug')">
                                        @{{ errors.first('slug') }}
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