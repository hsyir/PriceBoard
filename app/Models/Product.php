<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "price", "unit", "category_id", "published",
        "discount_percent", "no_discount_price"
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('order', "asc");
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault(["name" => "دسته بندی نشده"]);
    }
}
