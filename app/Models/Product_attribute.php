<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product_attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'weight',
        'value'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
