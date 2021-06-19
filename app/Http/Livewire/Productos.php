<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Product;
use App\Models\DetailProduct;
use App\Models\Colour;
use Illuminate\Support\Collection;
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
		 // $detaills= DetailProduct::->product;
  	//      $this->detaills = $detaills;
		
		 
	}	

    public function render()
    {
    	if(empty($this->category_id)){
    		return view('livewire.productos',[			
			'products'=> Product::where(function($sub_query)
				{   $sub_query->where('name','like', '%'.$this->search.'%');
				})->paginate(10) 
			]);

    	}else{			
    		return view('livewire.productos',[			
			'products'=> Product::where(function($sub_query)
				{   $sub_query->where('category_id',$this->category_id);
				})->paginate(2) 
			]);
       
   		}
    }

    public $product, $amount, $colours, $images, $Nimages, $Ncolours, $img, $description;
     public $ProdNames, $AddCar, $collec;
   

   	public function show($id){
   	  $product = Product::find($id);
      $this->img =$product->img;
   		
      $detaill= DetailProduct::where('product_id',$id)->first();
     		$this->product_id = $detaill;
        $this->description = $detaill->description;
        $this->amount = $detaill->amount;

        $this->colours = $product->colours;
        $Ncolours = count($product->colours);
        $this->Ncolours = $Ncolours;

        $this->images = $product->images;
        $Nimages = count($product->images);
        $this->Nimages = $Nimages;
   	}




    public function AddCar($id){
      $product = Product::find($id);
      $this->AddCar= $this->AddCar + 1;
      //$this->ProdNames=$product->name;     
     // $this->NewProd($id);
       $this->collec = $product->name;

    }


    public function NewProd($id){
       $collec = $this->add;
       // $collec = new Collection($product->name);
    }












}
