@extends('layout')


@section('title','home')






@section('content')
<div class="container">
 <div class="row">
 
<div class="col-12 col-lg-6" >

<h1 Class="display-4 text-primary mb-4" >Aprende Kaqchikel Facil</h1>
<p>
    Aca encontraras todo tipo de palabras en español Traduciadas a el idioma Maya kaqchikel los cuales cuentan
    con imagenes, palabras y audios para poder saber como se pronuncian Correctamente.

    La finalidad de este Proyecto es apoyar a todo tipo de personas que necesiten saber como es su traducion de una palabra en español
    a Kaqchikel.
</p>
<a class="btn btn-lg btn-block btn-info " href="{{route('contenido')}}">Contenido</a>
<a  class="btn btn-lg btn-block btn-outline-primary " href="{{route('contact')}}">Contactanos</a>

</div>
<div class="col-12 col-lg-6">
     <img class="img-fluid" src="/img/home.svg" >
 </div>

</div>



@endsection