@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-3" style="background-color: #181926;">
            @if ($usuario['avatar'] != null)
                <img src="{{ asset($usuario['avatar']) }}" alt="Avatar" class="img-fluid" style="border-radius: 100%">
            @else
                <img src="{{ asset('img/avatar.png') }}" alt="Avatar" class="img-fluid">
            @endif

            <h2 class="text-white">{{$usuario['name']}}</h2>
        </div>
        <div class="col-9">
            <h1>Recetas del usuario</h1>
            <div class="row">
                @foreach ($recetas as $receta)
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <img src="{{asset($receta->multimedia)}}" alt="{{$receta->titulo}}">
                            <div class="card-body">
                                <h3 class="card-title">{{$receta->titulo}}</h3>
                                <p>Tiempo de preparación: {{$receta->tiempo}}</p>
                                <p>{{$receta->categoria}}</p>
                            </div>
                            <div class="card-footer">
                                <form action="{{url('/detalleReceta/'.$receta->id)}}" method="get">
                                    <button type="submit" class="btn btnBrightR text-white" style="width: 100%;">Ver detalles</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
