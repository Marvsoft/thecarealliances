@extends('ui::layouts.index')

@section('content-wrapper')

    <section class="hero">
        <div class="container">
            <div class="text">
                <h1>Create Your Plan </h1>
            </div>
        </div>
    </section>

    <section class="forms bg-grey">
        <div class="container">
            <div class="title">
                <h3>
                    Create Your Plan
                </h3>
            </div>
            <form class="form-custom helper-form ">


                <div class="row">
                    <div class="form-group">
                        <label for="categoryValue">You are? </label>
                        <select class="form-select" id="categoryValue">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>

                    <div class="form-group ">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title">
                    </div>

                    <div class="form-group ">
                        <label for="start">Start</label>
                        <input type="date" class="form-control" id="start">
                    </div>

                    <div class="form-group ">
                        <label for="end">End</label>
                        <input type="date" class="form-control" id="end">
                    </div>


                    <div class="form-group">
                        <label for="message">Description </label>
                        <textarea class="form-control" id="message" rows="7"
                            placeholder="Enter a description for your plan"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="categoryValue">Priority </label>
                        <select class="form-select" id="categoryValue">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="obstacles">Obstacles </label>
                        <textarea class="form-control" id="obstacles" rows="7"
                            placeholder="Enter a Obstacles for your plan"></textarea>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Submit Now</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
