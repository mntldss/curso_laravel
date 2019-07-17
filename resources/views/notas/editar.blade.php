@extends('masterPage')

@section('section')
    <h1>Editar Nota {{$nota->id}}</h1>

    @if (session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}</div>
    @endif


    <form action="{{route('notas.update',$nota->id)}}" method="POST">
            @method('PUT')
            @csrf

            @error('nombre')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">El nombre es obligatorio
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror

            @error('descripcion')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">La descripción es obligatorio
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>                  
                 </div>
            @enderror


            <input type="text" name="nombre"
             placeholder="Nombre" 
             class="form-control mb-2" 
             value="{{$nota->nombre}}">

            <input type="text" name="descripcion" 
            placeholder="Descripcion" 
            class="form-control mb-2"
            value="{{$nota->descripcion}}">

            <button class="btn btn-warning btn-block" type="submit">Editar</button>
     </form>
@endsection