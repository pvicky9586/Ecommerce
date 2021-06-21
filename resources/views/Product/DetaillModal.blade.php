 <div wire:ignore.self class="modal fade" id="DetaillModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
   
    <div class="modal-content">
        <div class="modal-header" >
           <h5 class="display-4 text-primary text-center"  style="float: center" id="exampleModalLabel">
              <img src="{{$image_path}}">
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true close-btn"><img src="{{asset('images/icons/close.png')}}" width="50" ></span>
          </button>
        </div>
    


    <div class="modal-body"> 
      <div class="media-body" style=" border: 1px solid #d8d9d6;">
        <h4 class="media-heading" >
        <img src="" style="width: 5%;">
        </h4>
        <div style="border: 1px solid  #d5d2d1; padding: 5%;" class="text-center display-6">
          <p>{{$description}}</p>
          <p class="display-5 text-primary">{{$amount}}</p>
        </div>
       
        
      <!--     <label>Colour(s):</label> -->
        <!-- {{$Ncolours}}          {{$colours}}  -->
          @if($Ncolours>=1)
            <small>Color(es):</small>
          <div style="display: flex;  flex-wrap: wrap;   align-content: space-between;">
           @for($i=0; $i<$Ncolours; $i++)
           
          <!--   <?php echo $colours[$i]->colour; ?> -->
             <label  style="margin-right: 1%; padding: 2%; background:  <?php echo $colours[$i]->cod; ?>"></label>
           @endfor
        </div>
        @endif


          <div style="display: flex; flex-wrap: wrap; align-content: space-between;">
          <label>Imagen(s):</label>
    <!--       @for($j=0; $j<$Nimages; $j++)
            
              <label><img src="<?php echo $images[$j]->img; ?>" style="width: 30%;"></label>
           
          @endfor -->
        </div>
      
      </div>
    </div>
  
<br><br>
    </div>
 
    </div>
  </div>
</div>