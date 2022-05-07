@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-3" style="background-color: #181926;">
            <div class="container pt-5">
                @if ($usuario['avatar'] != null)
                    <img src="{{ asset($usuario['avatar']) }}" alt="Avatar" class="img-fluid mb-4 mx-auto d-block" style="border-radius: 100%">
                @else
                    <img src="{{ asset('img/avatar.png') }}" alt="Avatar" class="img-fluid mb-4 mx-auto d-block">
                @endif

                <h2 class="text-white text-center mb-3">Recetas de: {{$usuario['name']}}</h2>
            </div>
        </div>
        <div class="row">
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
