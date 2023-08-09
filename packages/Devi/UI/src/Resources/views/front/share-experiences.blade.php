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
            <form
                class="form-custom helper-form"
                action="{{ route('ui.front.share-experiences-store') }}"
                method="POST"
            >
                @csrf

                <div class="text-center">
                    <h4> Your experience will greatly help other users.
                    </h4>
                </div>

                <div class="row">
                    <div class="form-group ">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>

                    <div class="form-group ">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter your name">
                    </div>

                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Enter your location">
                    </div>


                    <div class="form-group">
                        <label for="category">Category </label>
                        <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category
                        ">
                    </div>

                    <div class="form-group">
                        <label for="message">Content</label>
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
