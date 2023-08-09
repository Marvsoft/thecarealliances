@extends('ui::layouts.index')

@section('content-wrapper')

    <section class="hero">
        <div class="container">
            <div class="text">
                <h1>Edutainment, Culture and Lifestyle </h1>
            </div>
        </div>
    </section>

    <section class="forms bg-grey">
        <div class="container">
            <div class="title">
                <h3>
                    Add yours!
                </h3>
            </div>

            <form
                class="form-custom helper-form"
                action="{{ route('ui.front.edutainment-culture-and-lifestyle-store') }}"
                method="POST"
            >
                @csrf
                <div class="row">
                    <div class="form-group ">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>

                    <div class="form-group ">
                        <label for="start">Start</label>
                        <input type="date" class="form-control" id="startdate" name="startdate">
                    </div>

                    <div class="form-group ">
                        <label for="end">End</label>
                        <input type="date" class="form-control" id="enddate" name="enddate">
                    </div>

                    <div class="form-group">
                        <label for="category">Category </label>
                        <select class="form-select" id="category" name="category">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>

                    <div class="form-group ">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location">
                    </div>

                    <div class="form-group">
                        <label for="description">Description </label>
                        <textarea class="form-control" id="description" name="description" rows="7"
                            placeholder="Enter a description for your plan"></textarea>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Submit Now</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
