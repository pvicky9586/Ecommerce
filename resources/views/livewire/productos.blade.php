<div style="display: flex;" class="container">
  <div style="">


  <div align="center">
   <span class="text-muted display-6">Categoria</span>
      @foreach($categorys as $cate)
         <b style="cursor: pointer; font-size:1.5rem">{{$cate->name}}</b> 
         <input type="radio" wire:model="category_id" value="{{$cate->id}}" wire:click="change_img" >
         &nbsp;&nbsp;
      @endforeach
  </div>  <br><br>

    @if($category_id)
      <div align="center">
        <img src="/images/Categorys/{{$category}}"  class="card-img-top mx-auto"  style="height: 100px; width: 300px;" >
      </div>
    @endif
      









 <!--        <div>
             <span class="text-muted">Categoria</span>
             <select wire:model="category_id" wire:change="change_img">
              <option value="">Seleccione</option>
            @foreach($categorys as $cate)     
              <option value="{{$cate->id}}">{{$cate->name}}</option>
            @endforeach
            </select>

            @if($category_id)
                <img src="/images/Categorys/{{$category}}"  class="card-img-top mx-auto"  style="height: 100px; width: 300px;" >
            @endif
        </div> -->













<!--         <img src="/images/Categorys/$category')}}"> -->
              <div align="center">
           <img src="{{asset('images/icons/searh.png')}}" width="50" height="30"> <input type="text"   wire:model="search"  placeholder="Buscar por nombre" style="width: 70%">
          </div>  
        <div style="  display: flex; flex-wrap: wrap; width: 100%; align-items: center; margin: 5%; margin-top: 0" >     
        	@foreach($products as $prod)
                        <div style=" margin: 0.5%;  border: 0.5px solid black; font-weight: bold; width: 20%; height: 30%;" >
                            <div align="center">
                              <img src="{{$prod->image_path}}" style="width: 100%; cursor: pointer;" title="Ver" 
                               data-toggle="modal" data-target="#DetaillModal"  wire:click="show({{$prod->id}})" title="details">
                            </div>
                           <p align="center">{{$prod->name}}</p>
                           <p align="center">{{$prod->price}} $</p>                       
                          <div class="card-footer" style="background-color: white;">                                  
                              <form action="{{ route('cart.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $prod->id }}" id="id" name="id">
                                <input type="hidden" value="{{ $prod->name }}" id="name" name="name">
                                <input type="hidden" value="{{$prod->price}}" id="price" name="price">
                                <input type="hidden" value="{{ $prod->image_path }}" id="img" name="img">
                                <input type="hidden" value="{{$prod->slug}}" id="slug" name="slug">
                                <input type="hidden" value="1" id="quantity" name="quantity">
                               
                                <div align="center">
                                  <button class="btn btn-primary" title="add to cart"><span class="glyphicon glyphicon-plus-sign add to cart"> Add to Cart</span>
                                </button>   
                                </div>          
                              </form>

                          </div>
                        </div>
          @endforeach
       

        </div>
            <div style="color:blue;">
            {{ $products->links() }}
          </div> 
          
     </div>
  <div style="width: 20%" align="center"> 
      <div style=" border: 1px solid #d8d9d6;">
      @include('partials.navbar')       
      </div>

  </div>


</div>


