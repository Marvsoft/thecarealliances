<div class="search-bar">
    {{-- @dd($category) --}}
    <div class="container ">
        <form action="{{ route('ui.front.searchcateory') }}" method="POST">
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
                    >
                        @if (isset($category))
                            <option value="">
                                -- Choose option --
                            </option>

                            @foreach ($category as $item)
                                <option value="{{ $item->name }}">
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="search-item">
                    <label for="location">Select Location:</label>
                    <select name="location" id="location">
                        @if (isset($category))
                            <option value="">-- Choose option -- </option>
                            @foreach ($category as $item)
                                <option value="{{ $item->zip_code }}">{{ $item->zip_code }}</option>
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
