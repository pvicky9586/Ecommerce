<div>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Category's</h4>
      <span class="text-muted">Seleccione</span>
           <select wire:model="category_id">
            <option value="">----------</option>
          @foreach($categorys as $cate)     
            <option value="{{$cate->id}}">{{$cate->name}}</option>
          @endforeach
          </select>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>


      <div style="display: flex;" align="center">
        <div>
          <img src="{{asset('images/ecommerce.png')}}" width="400">
        </div>
        <div style="margin-left: 10%;">
           <input type="text"   wire:model="search"  placeholder="Buscar productos" style="padding: 3%;">
        </div>  
      </div>

    <div style="  display: flex; flex-wrap: wrap; width: 100%; align-items: center;">     
    	@foreach($products as $prod)
            <?php $details=$prod->details;
                foreach ($details as $d) { ?> <!-- recorrec table pivot-->
                    <div style=" margin: 0.5%;  border: 0.5px solid black; font-weight: bold;">
                        <div align="center"><img src="{{$d->pivot['img']}}" style="width: 100%;"></div>
                        <p  align="center">{{$d->pivot['value']}} $</p>

                     </div> 
                <?php }  ?> 
      @endforeach
    </div>
    <div style="color:blue;">
      {{ $products->links() }}
    </div> 


</div>


