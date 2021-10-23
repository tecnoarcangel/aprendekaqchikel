@extends('layout')


@section('title','Ingresar Nueva Palabra')



@section('content')

<div class="container"> 
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">    



@include('partials.session')



<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('palabra.store') }}" enctype="multipart/form-data">

    @csrf
    <h1 class="display-5">Ingresar nueva traducion</h1>
    <hr>
    <div class="form-group" >
    <label for="imagen" >Imgen de la palabra</label>
        <input class="form-control bg-light shadow-sm @error('imagen') is-invalid @else border-0 @enderror" id="imagen"  type="file" name="imagen" value="{{ old ('imagen')}}">
        @error('name')
        <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
     </span>
     @enderror
    </div>

    <div class="form-group">
            <label for="palabraes">palabra en español</label>
        <input class="form-control bg-light shadow-sm @error('palabraes') is-invalid @else border-0 @enderror"  id="palabraes" type="text"  placeholder="Escribe la palabra en español" name="palabraes" value="{{ old ('palabraes')}}">

    @error('palabraes')
     <span class="invalid-feedback" role="alert">
     <strong>{{$message}}</strong>
     </span>
     @enderror
        </div>
    
        <div class="form-group">
    <label>palabra en kaqchikel</label>
        <input class="form-control bg-light shadow-sm @error('palabraes') is-invalid @else border-0 @enderror" id="palabramaya" type="text"  placeholder="Escribe la palabra en idioma maya" name="palabramaya" value="{{ old ('palabramaya')}}">
        @error('palabramaya')
     <span class="invalid-feedback" role="alert">
     <strong>{{$message}}</strong>
     </span>
     @enderror
        </div>
        
        <div class="form-group">
    <label>Audio de pronunciacion</label>
        <input class="form-control bg-light shadow-sm @error('palabraes') is-invalid @else border-0 @enderror"type="file" name="audio" id="audio" >
   
        @error('palabramaya')
     <span class="invalid-feedback" role="alert">
     <strong>{{$message}}</strong>
     </span>
     @enderror
        </div>

        <div class="form-group">
    <label>Categoria</label>
        {{Form::select('categoria_id',$categorias, $palabra->categoria_id, ['class '=> 'form-control'. ($errors->has('categoria_id')? 'is invalid': ''), 'placeholder' => 'Selecionar Categoria'])}}
          {!! $errors->first('categoria_id','<div class="invalid-feedback">:message</p>' )!!} 
       
     
        </div>

    <button class="btn-primary btn-lg btn-block">Guardar</button>

</form>
</div>
</div>
</div>

@endsection