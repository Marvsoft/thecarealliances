@extends('ui::layouts.index')

@section('content-wrapper')

    @include('ui::layouts.search')

    <section class="hero">
        <div class="container">
            <div class="text">
                <h1>Create a new community </h1>
            </div>
        </div>
    </section>

    <section class="forms bg-grey">
        <div class="container">
            <div class="title">
                <h3>
                    Create a new community
                </h3>
            </div>
            <form class="form-custom helper-form ">

                <div class="row">
                    <div class="form-group ">
                        <label for="name">Community Name* </label>
                        <input type="text" class="form-control" id="cname" placeholder="Community Name">
                    </div>

                    <div class="form-group ">
                        <label for="name">Interest or Category </label>
                        <input type="text" class="form-control" id="interestCategory"
                            placeholder="Interest or Category">
                    </div>


                    <div class="form-group">
                        <label for="message">Description </label>
                        <textarea class="form-control" id="message" rows="7"
                            placeholder="Enter your message"></textarea>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
