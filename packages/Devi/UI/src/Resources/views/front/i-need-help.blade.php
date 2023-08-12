@extends('ui::layouts.index')

@section('content-wrapper')

    <section class="hero">
        <div class="container">
            <div class="text">
                <h1>I Need Help </h1>
            </div>
        </div>
    </section>

    <section class="forms bg-grey">
        <div class="container">
            <div class="title">
                <h3>
                    Help Request Center
                </h3>
            </div>
            <form action="{{ route('i-need-help-store') }}" method="post" class="form-custom helper-form ">
                @csrf
                <div class="text-center">
                    <h4>Create Your Helper Profile </h4>
                </div>
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="name">Name*</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                        @error('name')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email*</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                        @error('email')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label>Topic</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="topic[]" id="personal" value="1">
                            <label class="form-check-label" for="personal">Personal Life</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="topic[]" id="professional" value="2">
                            <label class="form-check-label" for="professional">Professional Life</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="topic[]" id="organization" value="3">
                            <label class="form-check-label" for="organization">Organization</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="topic[]" id="other" value="4">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                        @error('topic')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" id="location" placeholder="Enter your location">
                        @error('location')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Preferred method of contact </label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="method_of_contact[]" id="mailHelp" value="1">
                            <label class="form-check-label" for="mailHelp">Email</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="method_of_contact[]" id="phoneHelp" value="2">
                            <label class="form-check-label" for="phoneHelp">Phone</label>
                        </div>
                        @error('method_of_contact')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Situation</label>
                        <textarea class="form-control" name="situation" id="message" rows="7"
                            placeholder="Enter your message"></textarea>
                        @error('situation')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Submit Now</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
