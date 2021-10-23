@extends('layout')



@section('title','About')


@section('content')

<div class="container">
 <div class="row">
 <div class="col-12 col-lg-6">
     <img class="img-fluid" src="/img/about.svg" >
 </div>
<div class="col-12 col-lg-6" >

<h1 Class="display-4 text-primary mb-4" >Sobre Nosotros</h1>
<p>
    Somos Un grupo de Jovenes los cuales queremos apoyar a todo tipo de estudiantes de todos niveles para que pueden
    tener acceso a la informacion, ya que nos hemos dado cuenta que no existe tanta informacion sobre esta hermosa lengua maya materna la cual nos identifica.

</p>

<p>
 Con el paso del tiempo se ira agregando mas contenido sobre mas diferentes traduciones.
    
</p>
<a class="btn btn-lg btn-block btn-info " href="{{route('contenido')}}">Contenido</a>
<a  class="btn btn-lg btn-block btn-outline-primary " href="{{route('contact')}}">Contactanos</a>

</div>


</div>
@endsection 