@extends('admin::layouts.master')

@section('page_title')
    {{ __('Sub Category') }}
@stop

@section('content-wrapper')
    <div class="content full-page">
        <h1>
            {{ Breadcrumbs::render('who-am-i.sub-category') }}

            {{ __('admin::app.who-am-i.sub-category') }}
        </h1>

        <a href="{{ route('admin.who-am-i.sub-category.create') }}" class="btn btn-md btn-primary">
            {{ __('admin::app.who-am-i.create-btn') }}
        </a>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Header</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sub_cat as $key => $val)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $val->header }}</td>
                        <td>{{ @$val->getCategory->header }}</td>
                        <td><?php echo $val->description; ?></td>
                        <td><a class="btn btn-primary" href="{{ route('admin.who-am-i.sub-category.edit',['id'=>$val->id])}}"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
