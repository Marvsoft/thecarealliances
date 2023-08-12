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
            <form action="{{ route('edutainment-culture-lifestyle-store') }}" method="post" class="form-custom helper-form ">
                @csrf
                <div class="row">
                    <div class="form-group ">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                        @error('name')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label for="start">Start</label>
                        <input type="date" name="start_date" class="form-control" id="start">
                        @error('start_date')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label for="end">End</label>
                        <input type="date" name="end_date" class="form-control" id="end">
                        @error('end_date')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label for="categoryValue">Category </label>
                        <select name="category_id" class="form-select" id="categoryValue">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control" id="name" placeholder="Enter Location">
                        @error('location')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="message">Description </label>
                        <textarea class="form-control" name="description" id="message" rows="7"
                            placeholder="Enter a description for your plan"></textarea>
                            @error('description')
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
