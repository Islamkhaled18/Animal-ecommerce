<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Models\Product;



class Category extends Model
{
    use HasTranslations;
    public $table = 'categories';
    public $guarded = [];
    public $translatable = [
        'category_name',
        'slug'
    ];

    public function scopeChild($query)
    {
        return $query->where('parent_id' ,'!=', null);

    }
    public function scopeParent($query)
    {
        return $query->where('parent_id' , null);

    }
    public function _parent(){

        return $this->belongsto(Self::class , 'parent_id');
    }

    public function childrens(){
        return $this->hasMany(Self::class , 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,'product_categories');
    }

    
    public function getActive(){
        return  $this -> is_active  == 0 ?  'غير مفعل'   : 'مفعل' ;
    }

}
