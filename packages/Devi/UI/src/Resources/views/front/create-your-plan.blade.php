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
            <form action="{{ route('create-your-plan-store')}}" method="post" class="form-custom helper-form ">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <label for="categoryValue">You are? </label>
                        <select name="category_id" class="form-select" id="categoryValue">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                        @error('title')
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
                        <label for="message">Description </label>
                        <textarea class="form-control" name="description" id="message" rows="7"
                            placeholder="Enter a description for your plan"></textarea>
                            @error('description')
                                <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="categoryValue">Priority</label>
                        <select name="priority" class="form-select" id="categoryValue">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        @error('priority')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="obstacles">Obstacles </label>
                        <textarea name="obstacles" class="form-control" id="obstacles" rows="7"
                            placeholder="Enter a Obstacles for your plan"></textarea>
                            @error('obstacles')
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
