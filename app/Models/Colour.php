<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    use HasFactory;
    protected $table ='colours';
    protected $fillable = [ 'colour','product_id' ];


    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
