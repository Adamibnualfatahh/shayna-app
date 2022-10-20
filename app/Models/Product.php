<?php

namespace App\Models;

use App\Models\ProductGallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'slug',
        'quantity',
        'type',
    ];

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class,'products_id');
    }
}
