<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container ">
            <label style="color: #fff">Compra 's -> {{ \Cart::getTotalQuantity()}}</label>
           <a class="nav-link" href="{{ url('/cart') }}">
            <img src="{{asset('images/icons/show.png')}}" title="ver carrito"></a>
    </div>
</nav>