<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduct extends Model
{
    use HasFactory;
    protected $fillable =['colour','amount','img','value','product_id'];

     public function Product(){
    	return $this->belongsTo(Product::class);
    }
}
