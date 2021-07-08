<nav class="navbar navbar-expand-md shadow-sm">
    <div class="container display-6">
            <div class="text-muted">Compras </div>
             <img src="{{asset('images/icons/carrito.png')}}" width="20"></a> 
             <b class="display-5">{{ \Cart::getTotalQuantity()}}</b>
           <a class="nav-link" href="{{ url('/cart') }}">
            <img src="{{asset('images/icons/show.png')}}" title="ver carrito" width="30"></a>
    </div>
</nav>