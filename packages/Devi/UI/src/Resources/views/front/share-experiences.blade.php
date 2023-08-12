@extends('ui::layouts.index')

@section('content-wrapper')

    <section class="hero">
        <div class="container">
            <div class="text">
                <h1>Share Your Experience </h1>
            </div>
        </div>
    </section>

    <section class="forms bg-grey">
        <div class="container">
            <div class="title">
                <h3>
                    Your experiences are public. A greater community benefit from it!
                </h3>
            </div>
            <form action="{{ route('share-experiences-store') }}" method="post" class="form-custom helper-form ">
                @csrf
                <div class="text-center">
                    <h4> Your experience will greatly help other users.
                    </h4>
                </div>
                <div class="row">

                    <div class="form-group ">
                        <label for="name">Name*</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                        @error('name')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label for="name">Title</label>
                        <input type="text" name="title" class="form-control" id="name" placeholder="Enter your name">
                        @error('title')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control" id="location" placeholder="Enter your location">
                        @error('location')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="category">Category </label>
                        <input type="text" name="category" class="form-control" id="category" placeholder="Enter Category
                        ">
                        @error('category')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Content</label>
                        <textarea name="content" class="form-control" id="message" rows="7"
                            placeholder="Enter your message"></textarea>
                        @error('content')
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
