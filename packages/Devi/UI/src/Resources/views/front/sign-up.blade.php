@extends('ui::layouts.master')

@section('content-wrapper')

    <section class="forms bg-grey">
        <div class="container">

            <form class="form-custom helper-form signup-forms">
                <div class="text-center">
                    <h4>CREATE AN ACCOUNT </h4>
                </div>

                <div class="row">

                    <div class="form-group col-md-12">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Username">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="mail">Email</label>
                        <input type="email" class="form-control" id="mail" placeholder="Enter Email">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="firstname">Firstanme</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Enter Firstanme">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Enter Lastname">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="email" placeholder="Enter your Password">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="PasswordAgain">Password Again</label>
                        <input type="password" class="form-control" id="PasswordAgain" placeholder="Password Again">
                    </div>


                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Register Your Account</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
