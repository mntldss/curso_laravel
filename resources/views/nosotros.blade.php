@extends ('masterPage')

@section('section')
    <h1>Este es mi equipo de trabajo</h1>
    @foreach ($equipo as $item)
        <a href="{{route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a><br>
    @endforeach


    @if (!empty($nombre))
        @switch($nombre)
            @case($nombre =='Ignacio')
                <h2 class="mt-5">El nombre es {{$nombre}}</h2>
                <p>{{$nombre}}, Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid aut molestiae reiciendis mollitia? Atque aut, cupiditate ex adipisci dolorem, quasi voluptas deserunt porro hic ea eaque repellendus quo quidem.</p>
                @break
            @case($nombre =='Juanito')
                <h2 class="mt-5">El nombre es {{$nombre}}</h2>
                <p>{{$nombre}}, Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid aut molestiae reiciendis mollitia? Atque aut, cupiditate ex adipisci dolorem, quasi voluptas deserunt porro hic ea eaque repellendus quo quidem.</p>
                @break
            @case($nombre =='Pedrito')
                <h2 class="mt-5">El nombre es {{$nombre}}</h2>
                <p>{{$nombre}}, Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid aut molestiae reiciendis mollitia? Atque aut, cupiditate ex adipisci dolorem, quasi voluptas deserunt porro hic ea eaque repellendus quo quidem.</p>
                @break
            @default
                
        @endswitch
    @endif
@endsection