@extends('ui::layouts.index')

@section('content-wrapper')

    <section class="forms bg-grey">
        <div class="container">

            <form class="form-custom helper-form login-forms">
                <div class="text-center">
                    <h4>Password Reset</h4>
                </div>

                <div class="row">

                    <div class="form-group col-md-12">
                        <label for="Email">Send Password Link</label>
                        <input type="Email" class="form-control" id="name" placeholder="Enter your register Email">
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
