



<nav class= "navbar navbar-light navbar-expand-lg  bg-white shadow-sm ">
    <div class="container">
        
    <a class="navbar-brand" href="{{ route('home') }}"><img src="/img/guate.png" width="40" height="30" alt="">
        {{config('app.name')}}
</a>


<button class="navbar-toggler" type="button" 
    data-toggle="collapse" 
    data-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" 
    aria-expanded="false" 
    aria-label="{{ __('Toggle navigation') }}">
  <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link {{ setActive('home') }}" href="{{route('home') }}">@lang('Inicio')</a></li>

            <li class="nav-item">
                <a class="nav-link {{ setActive('about') }} " href="{{route('about') }}">@lang('Quienes somos')</a></li>

                <li class="nav-item">
                <a class="nav-link {{ setActive('contenido') }} " href="{{route('contenido') }}">@lang('Contenido')</a></li>
            

            
        <li class="nav-item">
            <a class="nav-link {{ setActive('contact') }}" href="{{route('contact') }}">@lang('Contacto')</a></li>



            
       @auth
       <li class="nav-item">
           <a class="nav-link " href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
            >Cerrar Session</a></li>
        
        @else
        <li class="nav-item">
            <a class="nav-link {{ setActive('login') }}"  href="{{ route('login') }}">Iniciar Sesion  </a></li>
        @endauth

   
  <form action="{{ route('buscar.index') }}" method="get" class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar palabra" name="texto"  >
    <button class="btn btn-outline-dark my-2 my-sm-0"  type="submit">Buscar</button>
  </form>
            </ul>
        </div>
    </div>
    
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
</form>