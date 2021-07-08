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

	public $categorys, $category, $search, $category_id, $img_cat, $img, $name;
  public $product, $amount, $colours, $Ncolours, $images, $Nimages, $image_path, $description;

	 public function updatingSearch()
    { 
      $this->resetPage();
    }

  function mount(){
    $categorys=Category::all();
    $this->categorys=$categorys;     
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







public $SelecCate;

  public function change_img($id){
      $category = Category::find($id);
      $this->iden = $category;
      if($category){
         $this->img_cat= $category->img;
      }

     // $products = Product::where('category_id',$this->category_id)->get();
     // $this->products = $products;
     // $this->SelecCate =  true;
        
  }
   
     // public $ProdNames, $AddCar, $collec, $detaill;
     // public $name, $price,$slug, $img, $quantity, $product_id;
   

  public function show($id){
      $this->default();
      $product = Product::find($id);
      $this->name = $product->name;
      $this->image_path =$product->image_path;      
      $detaill= DetailProduct::where('product_id',$id)->first();
      if($detaill){
        $this->description = $detaill->description; 
        $this->amount = $detaill->amount.' disponibles';   
           
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
