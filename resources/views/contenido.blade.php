@extends('layout')


@section('title','Contenido')



@section('content')
<div class="container">
    <div class="row" >
        <div  class=" col-sm-6 col-md-11">
      

@include('partials.session')
<h1 class="center ">Contenido</h1>
<div class="card-deck">
  <div class="card mb-3">
      
    <img class="card-img-top" src="img/familia.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Familia</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado con los miembros de la familia</p>
      
    </div>
    <a href="{{route('palabra.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>


  <div class="card mb-3">
    <img class="card-img-top" src="img/sabores.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Sabores</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado con los sabores y su traducion</p>
      
    </div>
    <a href="{{route('sabores.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>


  <div class="card mb-3">
    <img class="card-img-top" src="img/colores.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Colores</h5>
      <p class="card-text">En esta Seccion se muestra todo lo relacionado con los colores y su traducion</p>
      
    </div>
    <a href="{{route('colores.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>


<div class="card-deck">
<div class="card mb-3">
    <img class="card-img-top" src="img/partesdecasa.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Partes de la casa</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado con los sabores y su traducion</p>
    </div>
    <a href="{{route('partescasa.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card mb-3">
    <img class="card-img-top" src="img/partes-cuerpo.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Partes del cuerpo</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado con las partes del cuerpo </p>
    </div>
    <a href="{{route('partescuerpo.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card mb-3">
    <img class="card-img-top" src="img/utiles.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Utiles escolares</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado con los Utiles Escolares</p>
    </div>
    <a href="{{route('utilesescolares.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    
  </div>
  
  
</div>
<div class="card-deck">
<div class="card mb-3">
    <img class="card-img-top" src="img/numeros.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Numeros</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado con los Utiles Escolares</p>
    </div>
    <a href="{{route('numeros.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card mb-3">
    <img class="card-img-top" src="img/animales.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Animales</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado con Animales</p>
    </div>
    <a href="{{route('animales.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card mb-3">
    <img class="card-img-top" src="img/meses.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Meses del Año</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado con Los meses del Año</p>
    </div>
    <a href="{{route('mesano.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    
  </div>
  
  <div class="card-deck">
<div class="card mb-3">
    <img class="card-img-top" src="img/trasporte.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Trasportes</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado con los medios de trasporte.</p>
    </div>
    <a href="{{route('trasporte.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card mb-3">
    <img class="card-img-top" src="img/oficios.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Profesiones y Oficios</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado las Profesiones y Oficios</p>
    </div>
    <a href="{{route('profesion.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card mb-3">
    <img class="card-img-top" src="img/frutas.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Frutas</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado con las Frutas</p>
    </div>
    <a href="{{route('frutas.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    
  </div>
</div>
<div class="card-deck">
<div class="card mb-3">
    <img class="card-img-top" src="img/verduras.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Verduras</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado con las verduras.</p>
    </div>
    <a href="{{route('verduras.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card mb-3">
    <img class="card-img-top" src="img/tiempo.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Tiempo</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado con el tiempo pasado manaña año pasado proximo año ect</p>
    </div>
    <a href="{{route('tiempo.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card mb-3">
    <img class="card-img-top" src="img/estadotiempo.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Estados del tiempo</h5>
      <p class="card-text">En esta Sección puedes encontrar Traducciones relacionado con los estados del tiempo</p>
    </div>
    <a href="{{route('estadodeltiempo.index')}}" class="btn btn-primary">Abrir</a>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    
  </div>
</div>

        </div>
    </div>    

</div>


@endsection