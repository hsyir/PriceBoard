<form action="{{ route("categories.store") }}" method="post">
    @csrf

    <x-success></x-success>

    {{ Html::hidden("_method")->value("put")->when($action=="edit") }}
    {{ Html::hidden("category_id")->value($category->id)->when($action=="edit") }}

    {{ Html::text("name")->value(old("name",$category->name))->label("عنوان گروه") }}
    {{ Html::text("order")->value(old("order",$category->order))->label("اولویت") }}
{{--    {{ Html::text("color")->value(old("color",$category->color))->label("رنگ") }}--}}
{{--    {{ Html::text("color2")->value(old("color2",$category->color2))->label("رنگ") }}--}}
    <div class="form-group">
        <label for="color">رنگ</label>
        <input type="color" name="color" id="color" value="{{ $category->color }}" class="form-control">

    </div>
    <div class="form-group">
        <label for="color2">رنگ تیتر</label>
        <input type="color" name="color2" id="color2" value="{{ $category->color2 }}" class="form-control">

    </div>

    <input type="submit" value="ثبت" class="btn btn-outline-primary">

</form>
