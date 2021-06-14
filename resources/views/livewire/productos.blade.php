<div>
    <h1 class="display-3 text-primary text-center">My's Products</h1>

  
    <select wire:model="category">
    	<option>Category's</option>
    @foreach($categorys as $cate)    	
    	<option>{{$cate->name}}</option>
    @endforeach
    </select>


<div style="  display: flex;
  /*flex-direction: row;*/
  flex-wrap: wrap;
  width: 100%;
  align-items: center;">


	@foreach($products as $prod)

            <?php $details=$prod->details;
            foreach ($details as $d) { ?>
                <div style=" margin: 0.5%; width: 20%; border: 0.5px solid black; font-weight: bold;">
                    <div align="center"><img src="{{$d->pivot['img']}}" style="width: 100%;"></div>
                    <p class="display-6" align="center">{{$d->pivot['value']}} $</p>

                 </div> 
            <?php }  ?> 
       



        <br><br> 

    @endforeach

</div>



</div>

