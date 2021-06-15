<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Product;
//use App\Models\DetailProduct;
//use App\Models\Price;

class Productos extends Component
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';

	public $categorys, $search, $category_id='';

	public function updatingSearch()
    {
        $this->resetPage();
    }

	function mount(){
		$categorys=Category::all();
		$this->categorys=$categorys;

		// $products=Product::all();
		// $this->products=$products;
		
		// $prices=Price::all();
		// $this->prices=$prices;
		
		// $details= DetailProduct::all();
  	    // $this->details = $details;
	}	

    public function render()
    {
    	if(empty($this->category_id)){
    		return view('livewire.productos',[			
			'products'=> Product::where(function($sub_query)
				{   $sub_query->where('name','like', '%'.$this->search.'%');
				})->orderBy('id','desc')->paginate(6) 
			]);

    	}else{			
    		return view('livewire.productos',[			
			'products'=> Product::where(function($sub_query)
				{   $sub_query->where('category_id',$this->category_id);
				})->orderBy('id','desc')->paginate(6) 
			]);
       
   		}
    }













}
