<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'products_id', 'photo', 'is_default'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }

    // modify photo arttribute when retrive with eqoulent orm
    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
