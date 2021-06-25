<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Product;
use App\Models\DetailProduct;
//use App\Models\Colour;
//use Illuminate\Support\Collection;
//use App\Models\Price;

class Productos extends Component
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';

	public $categorys, $category, $search, $category_id='', $img;
  public $product, $amount, $colours, $Ncolours, $images, $Nimages, $image_path, $description;

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
				})->paginate(15) 
			]);

    	}else{			
    		return view('livewire.productos',[			
			'products'=> Product::where(function($sub_query)
				{   $sub_query->where('category_id',$this->category_id);
				})->paginate(15) 
			]);
       
   		}
    }

    public function change_img(){
      $category = Category::find($this->category_id);
      if($category){
         $this->category = $category->image_cat;
      }
     
    }
   
     // public $ProdNames, $AddCar, $collec, $detaill;
     // public $name, $price,$slug, $img, $quantity, $product_id;
   

   	public function show($id){
      $this->default();
   	  $product = Product::find($id);
      $this->colours = $product->colours;
      $this->Ncolours = count($product->colours);
      $this->image_path =$product->image_path;   		
      $detaill= DetailProduct::where('product_id',$id)->first();
      //$this->product_id = $detaill;
      if($detaill){
        //$this->detaill = $product->detail;
        $this->description = $detaill->description; 
        $this->amount = $detaill->amount.' disponibles';   
        //$this->colours = $detaill->colours;
        // $this->images = $product->images;
        // $Nimages = count($product->images);
        // $this->Nimages = $Nimages;        
        }
       
        
       
     
   	}




   public function default(){
    $this->description = '';
    $this->amount = '';
    $this->colours ='';
    $this->images = '';
    $this->image_path ='';

   }









}
