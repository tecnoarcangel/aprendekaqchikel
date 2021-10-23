@extends('layout')


@section('title','Profesiones y Oficios')



@section('content')
<div class="container">
  
<h1>Profeciones y Oficios</h1>
@include('partials.session')
@auth
<a  href="{{ route('palabra.create') }}" class="btn btn-primary">Nuevo Traducion</a>
@endauth


<div class="col-auto my-3">
@include('partials.form')

  <tbody>
  @forelse($profesion  as $palabraItem)
    <tr>
    
    
    <td><center><img class="img-fluid" style="height: 100px;" src="{{$palabraItem->imagen ?asset('storage/uploads/images/'.$palabraItem->imagen):asset('/img/imagen-vacia.jpeg')}}"></center></td>
    <td>{{$palabraItem->palabraes }}</td>
    <td>{{$palabraItem->palabramaya }}</td>
    <td><audio controlslist="nodownload" width="100%" height="400px" controls>
                    <source src="{{asset('storage/uploads/audios/'.$palabraItem->audio)}}" type="audio/mp3"></td>
    @auth
    <td><a href="{{ route('palabra.edit',$palabraItem->id)}}" class="btn btn-primary">Editar</a></td>
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