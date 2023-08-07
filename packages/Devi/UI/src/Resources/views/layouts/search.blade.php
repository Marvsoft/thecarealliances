@php
    $category = DB::table('charch_category')->get();
    $zipcode = DB::table('charch_address')->distinct()->pluck('zip_code');
@endphp

<div class="search-bar">
    <div class="container ">
        <form action="{{ route('ui.front.searchcateory') }}" id="search-form" method="POST">
            @csrf
            <div class="search-row">
                <div class="search-item">
                    <label for="sorting">Search By Anything:</label>
                    <input type="text" name="search">
                </div>

                <div class="search-item">
                    <label for="category">
                        Select Category:
                    </label>

                    <select
                        name="category"
                        id="category"
                        onchange="submitForm()"
                    >
                        @if (isset($category))
                            <option value="">
                                -- Choose option --
                            </option>

                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->category_name }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="search-item">
                    <label for="location">Select Location:</label>
                    <select name="location" id="location" onchange="submitForm()">
                        @if (isset($zipcode))
                            <option value="">-- Choose option -- </option>
                            @foreach ($zipcode as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="search-item">
                    <label>&nbsp;</label>
                    <button type="submit" class=" btn-primary"> Search</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function submitForm() {
        // Get the form element
        var form = document.getElementById('search-form');

        // Submit the form
        form.submit();
    }
</script>
