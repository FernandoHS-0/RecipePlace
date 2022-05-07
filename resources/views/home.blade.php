@extends('layouts.app')

@section('content')
    <h1 class="text-center">Explora recetas</h1>
    <div class="div" style="margin: 2% 5% 2% 5%">
        <div class="row">
            <div class="col-2">
                <div class="row mb-3">
                    <form action="{{route('buscar')}}" method="get">
                        <label for="busqueda" class="form-label">Buscar por nombre</label>
                        <input type="text" name="busqueda" id="busqueda" class="form-control mb-3">
                        <button type="submit" class="btn btnBrightR text-white">Buscar</button>
                    </form>
                </div>
                <div class="row">
                    <form action="{{route('filtrar')}}" method="get">
                        <label for="filtro" class="form-label">Filtrar por cateogria</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filtro" value="Entrada" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Entrada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filtro" id="Sopa">
                            <label class="form-check-label" for="Sopa">
                                Sopa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filtro" value="Plato fuerte">
                            <label class="form-check-label" for="Plato fuerte">
                                Plato fuerte
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filtro" value="Postre">
                            <label class="form-check-label" for="Postre">
                                Postre
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filtro" value="Bebida">
                            <label class="form-check-label" for="Bebida">
                                Bebida
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="fltro" value="Snack">
                            <label class="form-check-label" for="Snack">
                                Snack
                            </label>
                        </div>
                        <button type="submit" class="btn btnBrightR text-white">Filtrar</button>
                    </form>
                </div>
            </div>
            <div class="col-10">
                <div class="row justify-content-center">
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
    </div>
@endsection
