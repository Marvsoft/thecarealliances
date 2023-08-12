@extends('ui::layouts.index')

@section('content-wrapper')

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
            
            <form action="{{ route('community-store') }}" class="form-custom helper-form " method="post">
                @csrf
                <div class="row">
                    <div class="form-group ">
                        <label for="name">Community Name* </label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Community Name">
                        @error('name')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label for="name">Interest or Category </label>
                        <input type="text" class="form-control" name="interest_category" id="interestCategory"
                            placeholder="Interest or Category">
                            @error('interest_category')
                                <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                            @enderror
                    </div>


                    <div class="form-group">
                        <label for="message">Description </label>
                        <textarea class="form-control" name="description" id="description" rows="7"
                            placeholder="Enter your message"></textarea>
                            @error('description')
                                <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
