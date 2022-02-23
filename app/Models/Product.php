<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product_attribute;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
    */
    protected $guarded = [];
    
    public function attributes() {
        return $this->hasOne(Product_attribute::class);
    }
}
