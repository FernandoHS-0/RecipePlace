@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Actualizar receta</h1>
    <form action="{{route('actualizar.receta')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="multimedia" class="form-label">Multimedia</label>
                    <img src="{{asset($receta['multimedia'])}}" alt="{{$receta['titulo']}}" class="img-fluid">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="id" value="{{$receta['id']}}">
                    <button type="submit" class="btn btnBrightR text-white" style="width: 100%;">Actualizar receta</button>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" value="{{$receta['titulo']}}">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$receta['descripcion']}}">
                </div>
                <div class="mb-3">
                    <label for="tiempo" class="form-label">Tiempo de preparación:</label>
                    <input type="text" name="tiempo" id="tiempo" class="form-control" value="{{$receta['tiempo']}}">
                </div>
                <div class="mb-3">
                    <label for="ingredientes" class="form-label">Ingredientes:</label>
                    <textarea name="ingredientes" class="form-control">{{$receta['ingredientes']}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="instrucciones" class="fotm-label">Instrucciones:</label>
                    <textarea name="instrucciones" id="instrucciones" class="form-control">{{$receta['instrucciones']}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select name="categoria" id="categoria" class="form-select">
                        <option value="Entrada">Entrada</option>
                        <option value="Sopa">Sopa</option>
                        <option value="Plato fuerte">Plato fuerte</option>
                        <option value="Postre">Postre</option>
                        <option value="Bebida">Bebida</option>
                        <option value="Snack">Snack</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
