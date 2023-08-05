@extends('ui::layouts.index')

@section('content-wrapper')

    @include('ui::layouts.search')

    <section class="hero">
        <div class="container">
            <div class="text">
                <h1>I can Help</h1>
            </div>
        </div>
    </section>

    <section class="forms bg-grey">
        <div class="container">
            <div class="title">
                <h3>
                    I Need Help
                </h3>
            </div>
            <form class="form-custom helper-form ">
                <div class="text-center">
                    <h4>Help Request Center </h4>
                </div>


                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>

                    <div class="form-group">
                        <label>Type of Help</label><br>
                        <input type="text" class="form-control" id="help" placeholder="Type of help">
                    </div>

                    <div class="form-group">
                        <label>Help Category Type</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="urgent" value="urgent">
                            <label class="form-check-label" for="urgent">Urgent</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="nonUrgent" value="nonUrgent">
                            <label class="form-check-label" for="nonUrgent">Non-Urgent</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="other" value="other">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="categoryValue">Category Value</label>
                        <select class="form-select" id="categoryValue">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" placeholder="Enter your location">
                    </div>

                    <div class="form-group">
                        <label>Location Type</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="country" value="country">
                            <label class="form-check-label" for="country">By Country</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="state" value="state">
                            <label class="form-check-label" for="state">By State</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="zip" value="zip">
                            <label class="form-check-label" for="zip">By Zip Code</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="town" value="town">
                            <label class="form-check-label" for="town">By Town</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="schedule">Schedule</label>
                        <input type="text" class="form-control" id="schedule" placeholder="Enter your schedule">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="7"
                            placeholder="Enter your message"></textarea>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Submit Now</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
