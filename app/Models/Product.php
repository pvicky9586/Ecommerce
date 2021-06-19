<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [ 'name','img','category_id'  ];

    public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function detail(){ 
        return $this->hasOne(DetailProduct::class);
    }

    public function colours(){ 
        return $this->hasMany(Colour::class); 
    }
    public function images(){ 
        return $this->hasMany(Image::class); 
    }

    // public function detail(){ 
    //     return $this->belongsTo(Product::class,'colours')
    //         ->withPivot('product_id','description','colour','amount','img','value'); 
    // }


}
