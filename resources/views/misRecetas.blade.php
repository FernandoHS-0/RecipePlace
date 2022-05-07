@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Mis recetas</h1>
        <div class="row justify-content-center">
            @foreach ($recetas as $receta)
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset($receta->multimedia) }}" alt="{{ $receta->titulo }}" class="img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">{{ $receta->titulo }}</h3>
                        </div>
                        <div class="card-footer text-center">
                            <div class="row">
                                <div class="col-4">
                                    <form action="{{url('/detalleReceta/'.$receta->id)}}" method="get">
                                        <button type="submit" class="btn btnDarkR text-white">Detalles</button>
                                    </form>
                                </div>
                                <div class="col-4">
                                    <form action="{{url('/modificarReceta/'. $receta->id)}}" method="get">
                                        <button type="submit" class="btn btnDarkR text-white">Modificar</button>
                                    </form>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btnBrightR text-white" data-bs-toggle="modal" data-bs-target="#modalConfirmacion">Eliminar</button>
                                </div>
                            </div>

                            <div class="modal fade" id="modalConfirmacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header justify-content-center">
                                            <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro de eliminar la receta?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btnDarkR text-white" data-bs-dismiss="modal">Cancelar</button>
                                            <form action="{{route('eliminar.receta')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$receta['id']}}">
                                                <button type="submit" class="btn btnBrightR text-white">Confirmar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
