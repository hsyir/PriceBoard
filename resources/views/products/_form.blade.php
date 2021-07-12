<form action="{{ route("products.store") }}" method="post">
    @csrf

    <x-success></x-success>

    @php
        $categories = \App\Models\Category::all()->pluck("name","id");
    @endphp

    {{ Html::hidden("_method")->value("put")->when($action=="edit") }}
    {{ Html::hidden("product_id")->value($product->id)->when($action=="edit") }}

    {{ Html::text("name")->value(old("name",$product->name))->label("عنوان کالا") }}
    {{ Html::text("price")->value(old("name",$product->price))->label("قیمت") }}
    {{ Html::text("unit")->value(old("name",$product->unit))->label("واحد") }}

    {{ Html::select("category_id")->caption("دسته بندی")->options($categories)->value($product->category_id) }}

    <input type="submit" value="ثبت" class="btn btn-outline-primary">

</form>
