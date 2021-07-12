@extends("layouts.app")
@section("content")

    @php($action="edit")

    @include("categories._menu")

    <div class="container">
        <div class="row">
            <div class="col">
                @include("categories._form")
            </div>
        </div>
    </div>

@endsection
