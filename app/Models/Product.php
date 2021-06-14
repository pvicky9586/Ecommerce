<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [ 'name','category_id'  ];

    // public function category(){
    // 	return $this->belongsTo(Category::class,'detail_products')
    //         ->withPivot('category_id');
    // }
    public function details(){ 
        return $this->belongsToMany(Product::class,'detail_products')
            ->withPivot('product_id','colour','amount','img','value'); 
    }
    // public function Detail(){
    // 	return $this->hasMany(DetailProduct::class);
    // }


    // public function details(){ 
    //     return $this->belongsToMany(DetailProduct::class,'detail_products')
    //         ->withPivot('category_id','product_id','colour','amount','img'); 
    // }

}
