@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Publicar nueva receta</h1>
        <form action="{{route('nuevaReceta')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tiempo" class="form-label">Tiempo de preparación</label>
                            <input type="text" class="form-control" id="tiempo" name="tiempo">
                        </div>
                        <div class="mb-3">
                            <label for="ingredientes" class="form-label">Ingredientes</label>
                            <textarea class="form-control" id="ingredientes" name="ingredientes"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="instrucciones" class="form-label">Instrucciones</label>
                            <textarea name="instrucciones" id="instrucciones" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría</label>
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
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="multimedia" class="form-label">Multimedia</label>
                            <input class="form-control" type="file" id="multimedia" name="multimedia">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btnBrightR text-white" style="width: 100%">Publicar receta</button>
                        </div>
                    </div>
            </div>
        </form>
    </div>
@endsection
