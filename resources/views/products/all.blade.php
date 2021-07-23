@extends("layouts.app")
@section("content")

    @php
        $categories = \App\Models\Category::all()->pluck("name","id");
    @endphp

    @include("products._menu")
    <div class="container py-3">
        <div class="row">
            <div class="col">
                <x-success></x-success>
                <form action="{{ route("products.reorder")}}" method="post">
                    @csrf
                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>
                            <th>انتشار</th>
                            <th>عنوان کالا</th>
                            <th>قیمت</th>
                            <th>واحد</th>
                            <th>دسته بندی</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><a href="{{ route("products.edit",$product) }}">Edit</a></td>
                                <td>
                                    <input type="checkbox"  class="checkbox-inline" name="data[{{$product->id}}][published]" @if($product->published) checked @endif>
                                </td>
                                <td>
                                    <input type="text" value="{{ $product->name }}" width="5" class="form-control" name="data[{{$product->id}}][name]">
                                </td>
                                <td>
                                    <input type="text" value="{{ $product->price }}" width="5" class="form-control" name="data[{{$product->id}}][price]">
                                </td>
                                <td>
                                    <input type="text" value="{{ $product->unit }}" width="5" class="form-control" name="data[{{$product->id}}][unit]">
                                </td>
                                <td>
                                    <select
                                            name="data[{{$product->id}}][category_id]"
                                            class="form-control">
                                        @foreach($categories as $key=>$option)
                                            <option value="{{ $key }}" {{( $key != "" and $key==$product->category->id) ? "selected" : "" }}>{{  $option }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td width="100">
                                <!--                                <form action="{{ route("products.delete",$product) }}" method="post">
                                    @csrf
                                @method("delete")
                                    <input  class="btn btn-danger btn-sm" value="حذف" type="submit">
                                </form>-->
                                    <input type="text" value="{{ $product->order }}" width="5" class="form-control" name="data[{{$product->id}}][order]">
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <input type="submit" class="btn btn-success" value="Save">
                </form>
            </div>
        </div>
    </div>

@endsection
