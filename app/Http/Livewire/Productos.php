<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\DetailProduct;
use App\Models\Price;

class Productos extends Component
{

	public $categorys, $products, $prices, $details;

	function mount(){
		$categorys=Category::all();
		$this->categorys=$categorys;

		$products=Product::all();
		$this->products=$products;
		
		$prices=Price::all();
		$this->prices=$prices;
		
		$details= DetailProduct::all();
    	$this->details = $details;
	}	

    public function render()
    {
        return view('livewire.productos');
    }













}
