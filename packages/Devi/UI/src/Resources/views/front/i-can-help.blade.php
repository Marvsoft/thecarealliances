@extends('ui::layouts.index')

@section('content-wrapper')

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
            <form action="{{ route('i-can-help-store') }}" method="post" class="form-custom helper-form ">
                @csrf
                <div class="text-center">
                    <h4>Help Request Center </h4>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                        @error('name')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                        @error('email')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Type of Help</label><br>
                        <input type="text" name="type_of_help" class="form-control" id="help" placeholder="Type of help">
                        @error('type_of_help')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Help Category Type</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="category_type[]" id="urgent" value="1">
                            <label class="form-check-label" for="urgent">Urgent</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="category_type[]" id="nonUrgent" value="2">
                            <label class="form-check-label" for="nonUrgent">Non-Urgent</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="category_type[]" id="other" value="3">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                        @error('category_type')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="categoryValue">Category Value</label>
                        <select name="category_id" class="form-select" id="categoryValue">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        @error('category_id')
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
                        <label>Location Type</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="location_type[]" id="country" value="country">
                            <label class="form-check-label" for="country">By Country</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="location_type[]" id="state" value="state">
                            <label class="form-check-label" for="state">By State</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="location_type[]" id="zip" value="zip">
                            <label class="form-check-label" for="zip">By Zip Code</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="location_type[]" id="town" value="town">
                            <label class="form-check-label" for="town">By Town</label>
                        </div>
                        @error('location_type')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="schedule">Schedule</label>
                        <input type="text" name="schedule" class="form-control" id="schedule" placeholder="Enter your schedule">
                        @error('schedule')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" id="message" rows="7"
                            placeholder="Enter your message"></textarea>
                            @error('message')
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
