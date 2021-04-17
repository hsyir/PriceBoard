@extends("layouts.app")
@section("content")

    @php($action="create")
    @php($product=new \App\Models\Product)

    @include("products._menu")

    <div class="container">
        <div class="row">
            <div class="col">
                @include("products._form")
            </div>
        </div>
    </div>

@endsection
