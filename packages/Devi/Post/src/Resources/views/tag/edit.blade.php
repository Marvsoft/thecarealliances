@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.settings.users.edit-title') }}
@stop

@section('content-wrapper')
    <div class="content full-page adjacent-center">

        <div class="page-header">
            
            {{ Breadcrumbs::render('tags.edit', $tag) }}

            <div class="page-title">
                <h1>{{ __('admin::app.settings.users.edit-title') }}</h1>
            </div>
        </div>

        <form method="POST" action="{{ route('admin.tags.update', $tag->id) }}" @submit.prevent="onSubmit">
            @method('PUT')
            <div class="page-content">
                <div class="form-container">

                    <div class="panel">
                        <div class="panel-header">
                            {!! view_render_event('admin.tags.create.form_buttons.before') !!}

                            <button type="submit" class="btn btn-md btn-primary">
                                {{ __('admin::app.tags.save-btn-title') }}
                            </button>

                            <a href="{{ route('admin.tags.index') }}">
                                {{ __('admin::app.tags.back') }}
                            </a>

                            {!! view_render_event('admin.tags.create.form_buttons.after') !!}
                        </div>

                        <tabs>
                            <tab name="{{ __('admin::app.tags.general') }}" :selected="true">
                                {!! view_render_event('admin.tags.create.form_controls.general.before') !!}

                                @csrf()
                                
                                <div class="form-group" :class="[errors.has('name') ? 'has-error' : '']">
                                    <label class="required">
                                        {{ __('admin::app.tags.name') }}
                                    </label>

                                    <input
                                        type="text"
                                        name="name"
                                        class="control"
                                        value="{{ old('name') ?? $tag->name }}"
                                        placeholder="{{ __('admin::app.tags.name') }}"
                                        v-validate="'required'"
                                        data-vv-as="{{ __('admin::app.tags.name') }}"
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
                                            {{ old('status') || $tag->status ? 'checked' : '' }}
                                        />
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                
                                <div class="form-group" :class="[errors.has('slug') ? 'has-error' : '']">
                                    <label class="required">
                                        {{ __('admin::app.tags.slug') }}
                                    </label>

                                    <input
                                        type="text"
                                        name="slug"
                                        class="control"
                                        value="{{ old('slug') ?? $tag->slug }}"
                                        placeholder="{{ __('admin::app.tags.slug') }}"
                                        v-validate="'required'"
                                        data-vv-as="{{ __('admin::app.tags.slug') }}"
                                    />

                                    <span class="control-error" v-if="errors.has('slug')">
                                        @{{ errors.first('slug') }}
                                    </span>
                                </div>

                                {!! view_render_event('admin.tags.create.form_controls.general.after') !!}
                            </tab>
                        </tabs>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop