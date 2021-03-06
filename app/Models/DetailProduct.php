<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduct extends Model
{
    use HasFactory;
    protected $fillable =['colour','amount','img','price','product_id','description'];

     public function Product(){
    	return $this->belongsTo(Product::class);
    }
}
