@extends('ui::layouts.master')

@section('content-wrapper')

    <section class="forms bg-grey">
        <div class="container">

            <form
                action="{{route('ui.front.sign-up')}}"
                method="POST"
                class="form-custom helper-form signup-forms"
            >
                @csrf
                <div class="text-center">
                    <h4>CREATE AN ACCOUNT </h4>
                </div>

                <div class="row">

                    <div class="form-group col-md-12">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" id="name" name="username" placeholder="Enter Username">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="mail">Email</label>
                        <input type="email" class="form-control" id="mail" name="email" placeholder="Enter Email">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="firstname">Firstanme</label>
                        <input type="text" class="form-control" id="firstname" name="first_name" placeholder="Enter Firstanme">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control" id="lastname" name="last_name" placeholder="Enter Lastname">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="email" name="password" placeholder="Enter your Password">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="PasswordAgain">Password Again</label>
                        <input type="password" class="form-control" id="PasswordAgain" name="c_password" placeholder="Password Again">
                    </div>


                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Register Your Account</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
