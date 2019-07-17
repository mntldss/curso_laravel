@extends('masterPage')
@section('section')
<div class="container my-4">
        <h1 class="display-4">
            Notas
        </h1>
        @if (session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
            
        @endif

        <form action="{{route('notas.crear')}}" method="POST">
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


            <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2"
            value="{{old('nombre')}}">
            <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2"
            value="{{old('descripcion')}}">
            <button class="btn btn-primary btn-block" type="submit">Agregar</button>
        </form>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Nomb~</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($notas as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <th scope="row">
                        <a href="{{route('notas.detalle',$item)}}">
                            {{$item->nombre}}
                        </a>
                    </th>
                    <td>{{$item->descripcion}}</td>
                    <td>
                        <a href="{{route('notas.editar',$item)}}" 
                        class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{route('notas.eliminar',$item)}}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm" 
                            type="submit">Eliminar
                            </button>
                        </form>
                    </td>
                </tr>       
                @endforeach                       
            </tbody>
          </table>

          {{$notas->links()}}

    </div>
@endsection