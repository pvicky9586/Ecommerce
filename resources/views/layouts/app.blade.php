<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ecommerce</title>
       @livewireStyles 
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
<!-- boorstrap 3 -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<!-- boorstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body>

<!-- 
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h4 class="text-white">Administrar</h4>
                <ul class="navbar-nav ml-auto"> -->
                       <!-- Authentication Links -->
       <!--          </ul>
        </div>
        </div> -->







  <nav class="navbar navbar-dark bg-dark">
<span class="display-2 text-center" style="color: #fff">E-COMMERCE</span>
    
                    <ul class="navbar-nav">
             <!-- Authentication Links -->
                        @guest
                        <div style="display: flex;">
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><img src="{{asset('images/icons/user.png')}}" width="50"  title="Entrar"></a>
                                </li>
                            @endif                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link display-7" href="{{ route('register') }}">{{ __('Registrarte') }}</a>
                                </li>
                            @endif
                        </div>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="text-success dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <?php echo  (strtoupper (Auth::user()->username) )?></a>
                                </a>
                                <label class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{ route('logout') }}" class="text-danger " onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Salir">Cerrar Seccion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                                </form>
                                </label>
                            </li>
                           
                             <!--   <img src="{{asset('images/icons/acceso.png')}}" class="img-user-auth"> -->
                              
                              <li class="nav-item">
                                    <a class="nav-link text-danger display-7" href="{{ route('Admin') }}">{{ __('Gestionar') }}</a>
                                </li>
                             </a>
                        @endguest
   </ul>
  </nav>
</div>









      <div id="app">
             
              <main class="py-4">
                @yield('content')
                @livewireScripts
              </main>
      </div>    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
