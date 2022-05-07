@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Filtrando: {{$keyWord}}</h1>
        <div class="row">
            @foreach ($filtro as $res)
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card">
                        <img src="{{asset($res->multimedia)}}" alt="{{$res->titulo}}" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{$res->titulo}}</h3>
                        <p>Tiempo de preparación: {{$res->tiempo}}</p>
                        <p>{{$res->categoria}}</p>
                    </div>
                    <div class="card-footer">
                        <form action="{{url('/detalleReceta/'.$res->id)}}" method="get">
                            <button type="submit" class="btn btnBrightR text-white" style="width: 100%;">Ver detalles</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
