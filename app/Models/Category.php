<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=["name","order","color","color2"];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('order',"asc");
        });
    }

    public function products()
    {
        return $this->hasMany(Product::class)->wherePublished(true);
    }
    public function publishedProducts()
    {
        return $this->hasMany(Product::class)->wherePublished(true);
    }
}
