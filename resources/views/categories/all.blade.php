@extends("layouts.app")
@section("content")

    @include("categories._menu")
    <div class="container py-3">
        <div class="row">
            <div class="col">
                <x-success></x-success>
                <table class="table">
                    <thead>
                    <tr>
                        <th>عنوان </th>
                        <th>تعداد محصول</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td><a href="{{ route("categories.edit",$category) }}">{{$category->name}}</a></td>
                            <td>{{ $category->products_count }}</td>
{{--                            <td><a href="{{ route("categories.organize",$category) }}">چیدمان</a></td>--}}
                            <td>
                                <form action="{{ route("categories.delete",$category) }}" method="post">
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
