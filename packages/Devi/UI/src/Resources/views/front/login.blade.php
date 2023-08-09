@extends('ui::layouts.master')

@section('content-wrapper')

    <section class="forms bg-grey">
        <div class="container">

            <form class="form-custom helper-form login-forms">
                <div class="text-center">
                    <h4>Login In </h4>
                </div>

                <div class="row">

                    <div class="form-group col-md-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="email" placeholder="Enter your Password">
                    </div>


                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection

