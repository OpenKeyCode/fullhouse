<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'image', 'icon', 'color', 'description', 'parent_category_id'];

//    public function getParentCategoryIdAttribute($value)
//    {
//        return self::find($value);
//    }


    public function parent()
    {
        return $this->hasOne(self::class, 'id', 'parent_category_id');
    }
    public function children()
    {
        return $this->hasMany(self::class, 'parent_category_id', 'id');
    }
}
