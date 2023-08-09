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
            <form
                class="form-custom helper-form"
                action="{{ route('ui.front.i-need-help-store') }}"
                method="POST"
            >
                @csrf
                <div class="text-center">
                    <h4>Create Your Helper Profile </h4>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Name*</label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            placeholder="Enter your name"
                        >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>

                    <div class="form-group">
                        <label>Topic</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="personal" name="personal" value="1">
                            <label class="form-check-label" for="personal">Personal Life</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="professional" name="professional" value="1">
                            <label class="form-check-label" for="professional">Professional Life</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="organization" name="Organization" value="1">
                            <label class="form-check-label" for="organization">Organization</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="other" name="other" value="1">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Enter your location">
                    </div>

                    <div class="form-group">
                        <label>Preferred method of contact </label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="mailHelp" name="mailHelp" value="1">
                            <label class="form-check-label" for="mailHelp">Email</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="phoneHelp" name="phoneHelp" value="1">
                            <label class="form-check-label" for="phoneHelp">Phone</label>
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="message">Situation</label>
                        <textarea
                            class="form-control"
                            id="message"
                            name="message"
                            rows="7"
                            placeholder="Enter your message"
                        ></textarea>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Submit Now</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
