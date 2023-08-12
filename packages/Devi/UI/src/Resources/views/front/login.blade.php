@extends('ui::layouts.master')

@section('content-wrapper')

    <section class="forms bg-grey">
        <div class="container">
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form action="{{route('ui.front.loginCheck')}}" class="form-custom helper-form login-forms" method="POST">
                @csrf
                <div class="text-center">
                    <h4>Login In </h4>
                </div>

                <div class="row">

                    <div class="form-group col-md-12">
                        <label for="name">Email</label>
                        <input type="email" class="form-control" id="name" name="email" placeholder="Enter your name">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="email" name="password" placeholder="Enter your Password">
                    </div>


                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection

