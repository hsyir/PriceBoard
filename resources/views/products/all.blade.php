@extends("layouts.app")
@section("content")

    @include("products._menu")
    <div class="container py-3">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th>عنوان کالا</th>
                        <th>قیمت</th>
                        <th>واحد</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><a href="{{ route("products.edit",$product) }}">{{$product->name}}</a></td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->unit}}</td>
                            <td>
                                <form action="{{ route("products.delete",$product) }}" method="post">
                                    @csrf
                                    @method("delete")
                                    <input  class="btn btn-danger btn-sm" value="حذف" type="submit">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
