<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use App\Models\Image;

use App\Models\Cart;




class Product extends Model
{
    use HasTranslations,
        SoftDeletes;

    public $table = 'products';
    public $guarded = [];
    public $translatable = [
        'product_name',
        'slug',
        'description',
        'short_description',

    ];

  
   protected $casts = [
    'manage_stock' => 'boolean',
    'in_stock' => 'boolean',
    'is_active' => 'boolean',
    ];

    protected $dates = [
    'special_price_start',
    'special_price_end',
    'start_date',
    'end_date',
    'deleted_at',
    ];

    public function getActive()
    {
        return $this->is_active == 0 ? 'غير مفعل' : 'مفعل';
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function hasStock($quantity)
    {
        return $this->qty >= $quantity;
    }

    public function outOfStock()
    {
        return $this->qty === 0;
    }

    public function inStock()
    {
        return $this->qty >= 1;
    }


    public function getTotal($converted = true) 
    {
        return $total =  $this->special_price ?? $this -> price;
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'product_id');
    }

    public function options()
    {
        return $this->hasMany(Option::class, 'product_id');
    }

    


   
}
