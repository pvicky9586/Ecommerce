<div style="display: flex;">
  <div style="width: 70%;">
        <div>
             <span class="text-muted">Categoria</span>
             <select wire:model="category_id">
              <option value="">Seleccione</option>
            @foreach($categorys as $cate)     
              <option value="{{$cate->id}}">{{$cate->name}}</option>
            @endforeach
            </select>
        </div>
      <!--       <div align="center">
          <input type="text"   wire:model="search"  placeholder="Buscar por nombre" style="width: 70%">
        </div>   -->
      <div style="  display: flex; flex-wrap: wrap; width: 100%; align-items: center;">     
      	@foreach($products as $prod)
                      <div style=" margin: 0.5%;  border: 0.5px solid black; font-weight: bold;" >
                          <div align="center">
                            <img src="{{$prod->img}}" style="width: 100%; cursor: pointer;" title="Ver" 
                             data-toggle="modal" data-target="#DetaillModal"  wire:click="show({{$prod->id}})">

                          </div>
                         <p  align="center">{{$prod->name}}</p>
                          <p  align="center">{{$prod->id}}</p>
                          <p  align="center">{{$prod->detail['value']}} $</p>
                          <div align="center">
                            <button align="center" class="btn btn-primary" wire:click.prevent="AddCar({{$prod->id}})">Agregar</button>
                          </div>
                      </div>    
        @endforeach
      </div>
       <div style="color:blue;">
        {{ $products->links() }}
      </div> 
  </div>
  <div style="width: 30%">
   <label class="display-5 text-primary"> Carrito de compras</label>
     <div class="modal-body"> 
      <div class="media-body" style=" border: 1px solid #d8d9d6;">
      

      @for($i=0; $i<=$AddCar; $i++)
        <label>{{$i}} </label> 
         
        </p>
      @endfor




       <p>Total: {{$AddCar}}</p>
       
      </div>
    </div>
  </div>
 <p>





              @include('Product.DetaillModal')
</div>




