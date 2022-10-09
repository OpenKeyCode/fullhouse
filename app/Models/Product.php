<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'description', 'short_description', 'price', 'discount', 'stock', 'image', 'status',
        'parameters', 'room_id', 'product_category_id', 'delivery_id'];


    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    protected function delivery()
    {
        return $this->belongsTo(Delivery::class, 'delivery_id', 'id');
    }
}
