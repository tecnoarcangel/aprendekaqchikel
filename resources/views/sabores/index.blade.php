@extends('layout')


@section('title','Sabores')



@section('content')
<div class="container">
  
<h1>Sabores</h1>
@include('partials.session')
@auth
<a  href="{{ route('sabores.create') }}" class="btn btn-primary">Nuevo Traducion</a>
@endauth


<div class="col-auto my-3">
<table  style="text: center;" class="table table-responsive table-striped ">
  <thead class="thead-dark" >
    <tr>
    
      <th scope="col">imagen</th>
      <th scope="col">Palabra En Español</th>
      <th scope="col">Palabra En kacquichel</th>
      <th scope="col">Pronunciación </th>
      @auth
      <th scope="col">Accion</th>
      <th scope="col">Accion </th>
      @endauth
    </tr>
  </thead>

  <tbody>
  @forelse($sabores as $palabraItem)
    <tr>
    
    
    <td><center><img class="img-fluid" style="height: 100px;" src="{{$palabraItem->imagen ?asset('storage/uploads/images/'.$palabraItem->imagen):asset('img/imagen-vacia.jpg')}}"></center></td>
    <td>{{$palabraItem->palabraes }}</td>
    <td>{{$palabraItem->palabramaya }}</td>
    <td><audio controlslist="nodownload" width="100%" height="400px" controls>
                    <source src="{{asset('storage/uploads/audios/'.$palabraItem->audio)}}" type="audio/mp3"></td>
    @auth
    <td><a href="{{ route('sabores.edit',$palabraItem->id)}}" class="btn btn-primary">Editar</a></td>
    <td> <form method="POST" action="{{ route('palabra.destroy',$palabraItem->id) }}">
        @csrf @method('DELETE') 
         <button class="btn btn-primary">Eliminar</button>
        
</form> 
@endauth
   


      @empty
      <td>No ay elementos para mostrar</td>
      
      @endforelse

    </tr>
     </tbody>
  
</table>

</div>

@endsection