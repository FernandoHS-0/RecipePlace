@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="{{asset($receta['multimedia'])}}" alt="{{$receta['titulo']}}" class="img-fluid">
            </div>
            <div class="col-8">
                <h1>{{$receta['titulo']}}</h1>
                <form action="{{url('/perfilUsuario/'.$usuario['id'])}}" method="get">
                    <h5>Publicado por: <button type="submit" style="border: none; background: none; color:#D92534;">{{$usuario['name']}}</button></h5>
                </form>
                <h3>Descripción:</h3>
                <p>{{$receta['descripcion']}}</p>
                <h3>Tiempo de preparación:</h3>
                <p>{{$receta['tiempo']}}</p>
                <h3>Ingredientes:</h3>
                <textarea name="ingredientes" cols="100" rows="10" disabled style="border: none;">{{$receta['ingredientes']}}</textarea>
                <h3>Instrucciones:</h3>
                <textarea name="instrucciones" cols="100" rows="10" disabled style="border: none;">{{$receta['instrucciones']}}</textarea>
            </div>
        </div>
    </div>

@endsection
