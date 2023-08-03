@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.posts.create-title') }}
@stop

@section('content-wrapper')
    <div class="content full-page adjacent-center">
        <div class="page-header">
            
            {{ Breadcrumbs::render('posts.create') }}

            <div class="page-title">
                <h1>{{ __('admin::app.posts.create-title') }}</h1>
            </div>
        </div>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
       </ul>

        <form method="post" action="{{ route('admin.posts.store') }}" @submit.prevent="onSubmit">
            <div class="page-content">
                <div class="form-container">

                    <div class="panel">
                        <div class="panel-header">
                            <button type="submit" class="btn btn-md btn-primary">
                                {{ __('admin::app.posts.save-btn-title') }}
                            </button>

                            <a href="{{ route('admin.posts.index') }}">
                                {{ __('admin::app.posts.back') }}
                            </a>
                        </div>

                        <tabs>
                            <tab name="{{ __('admin::app.posts.general') }}" :selected="true">
                                {!! view_render_event('admin.posts.create.form_controls.general.before') !!}

                                @csrf()
                                
                                <div class="form-group" :class="[errors.has('title') ? 'has-error' : '']">
                                    <label class="required">
                                        {{ __('admin::app.posts.name') }}
                                    </label>

                                    <input
                                        type="text"
                                        name="title"
                                        class="control"
                                        value="{{ old('title') }}"
                                        placeholder="{{ __('admin::app.posts.name') }}"
                                        v-validate="'required'"
                                        data-vv-as="{{ __('admin::app.posts.name') }}"
                                    />

                                    <span class="control-error" v-if="errors.has('title')">
                                        @{{ errors.first('title') }}
                                    </span>
                                </div>


                                <div class="form-group" :class="[errors.has('slug') ? 'has-error' : '']">
                                    <label class="required">
                                        {{ __('admin::app.posts.slug') }}
                                    </label>
                                
                                    <input
                                        type="text"
                                        name="slug"
                                        class="control"
                                        value="{{ old('slug') }}"
                                        placeholder="{{ __('admin::app.posts.slug') }}"
                                        v-validate="'required'"
                                        data-vv-as="{{ __('admin::app.posts.slug') }}"
                                    />
                                
                                    <span class="control-error" v-if="errors.has('slug')">
                                        @{{ errors.first('slug') }}
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
                                            {{ old('status') ? 'checked' : '' }}
                                        />
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                                <div class="form-group" :class="[errors.has('parent_id') ? 'has-error' : '']">
                                    {{ __('admin::app.category.title') }}
    
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

                                <div class="form-group " :class="[errors.has('tag[]') ? 'has-error' : '']">
                                    <label for="tag">{{ __('admin::app.leads.tag') }}</label>
             
                                    <tags-component
                                        control-name="tags[]"
                                        control-label="{{ __('admin::app.leads.tag') }}"
                                        :data='@json($tags)'
                                    ></tags-component>
                                    
                                    <span class="control-error" v-if="errors.has('tag[]')">
                                        @{{ errors.first('tag[]') }}
                                    </span>
                                </div>

                                <div class="form-group" :class="[errors.has('content') ? 'has-error' : '']">
                                    <label for="content" class="required" style="margin-bottom: 10px">{{ __('admin::app.posts.content') }}</label>
        
                                    <textarea
                                        name="content"
                                        class="control"
                                        id="content"
                                        v-validate="'required'"
                                        data-vv-as="&quot;{{ __('admin::app.posts.content') }}&quot;"
                                    >{{ old('content') }}</textarea>
        
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

    <script type="text/x-template" id="tags-component-template">
        <div class="tags-control control">
            <ul class="tags">
                <li class="tag-choice" v-for="(tag, index) in tags">
                    <input type="hidden" :name="controlName" :value="index"/>

                    @{{ tag }}

                    <i class="icon close-icon" style="cursor: pointer" @click="removeTag(index)"></i>
                </li>

                <li class="tag-input">
                    <input
                        type="hidden"
                        :name="controlName"
                        :data-vv-as="'&quot;' + controlLabel + '&quot;'"
                        v-if="! tags.length && tag_term == ''"
                    />

                    <input
                        type="text"
                        :name="controlName"
                        v-model="tag_term"
                        placeholder="{{ __('admin::app.leads.tag-placeholder') }}"
                        :data-vv-as="'&quot;' + controlLabel + '&quot;'"
                        @keydown.enter.prevent="addTag"
                    />
                </li>
            </ul>
        </div>
    </script>
        
    <script>
        Vue.component('tags-component', {
            template: '#tags-component-template',

            props: ['controlName', 'controlLabel', 'validations', 'data'],

            inject: ['$validator'],

            data: function () {
                return {
                    tags: {},

                    tag_term: '',
                }
            },

            methods: {
                addTag: function() {
                    let sanitizedTag = this.tag_term.trim();

                    Vue.set(this.tags, sanitizedTag, sanitizedTag);

                    this.tag_term = '';
                },

                removeTag: function(tag) {
                    Vue.delete(this.tags, tag);
                },

            },
            
            mounted() {
                this.tags = JSON.parse(JSON.stringify(this.data));
            }
        });
    </script>
@endpush