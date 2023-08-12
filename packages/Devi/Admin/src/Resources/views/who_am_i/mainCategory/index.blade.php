@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.who-am-i.main-category') }}
@stop

@section('content-wrapper')
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"> -->

    <div class="content full-page">
        <h1>
            {{ Breadcrumbs::render('who-am-i.main-category') }}

            {{ __('admin::app.who-am-i.main-category') }}
        </h1>

        <a href="{{ route('admin.who-am-i.main-category.create') }}" class="btn btn-md btn-primary">
            {{ __('admin::app.who-am-i.create-btn') }}
        </a>
        <!-- Personal Growth and Learning  -->
        {{--<div class="row g-5">
            @foreach($whomICategories as $val)
            <div class="col-4">
                <div class="wrapper">
                    <div class="form-group heading">
                        <!-- <input type="checkbox" id="checkbox2"> -->
                        <label for="checkbox2">{{ $val->header }} </label>
                    </div>
                    <div class="seprate">
                        @foreach($val->getSubCategory as $subcat)
                        
                            <div class="form-group">
                                <!-- <input type="checkbox" id="checkbox2"> -->
                                <label for="checkbox2">{{ $subcat->header }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>--}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Header</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $key => $val)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $val->header }}</td>
                        
                        <td><?php echo $val->description; ?></td>
                        <td><a class="btn btn-primary" href="{{ route('admin.who-am-i.main-category.edit',['id'=>$val->id])}}">Edit </a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@stop
