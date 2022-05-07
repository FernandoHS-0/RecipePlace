<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecetaController extends Controller
{
    //
    public function index(){
        return view('inicio');
    }


    public function publicarReceta(){
        return view('publicar');
    }

    public function misRecetas(){
        $recetas = Receta::where('idUsuario', Auth::id())->get();
        return view('misRecetas', compact('recetas'));
    }

    public function showAll(){
        $recetas = Receta::all();
        return view('home', compact('recetas'));
    }

    public function store(Request $request){
        $file = $request->file('multimedia');
        $destinationPath = 'img/Recetas/';
        $filename = $file->getClientOriginalName();
        $request->file('multimedia')->move($destinationPath, $filename);

        $receta = new Receta();
        $receta->idUsuario = Auth::id();
        $receta->titulo = $request->titulo;
        $receta->descripcion = $request->descripcion;
        $receta->tiempo = $request->tiempo;
        $receta->ingredientes = $request->ingredientes;
        $receta->instrucciones = $request->instrucciones;
        $receta->categoria = $request->categoria;
        $receta->multimedia = $destinationPath . $filename;

        $receta->save();

        return redirect('misRecetas')->with('mensaje.confirmacion', 'La receta ha sido añadida');
    }

    public function show($id){
        $receta = Receta::find($id);
        $receta = $receta->getAttributes();
        $usuario = User::find($receta['idUsuario']);
        $usuario = $usuario->getAttributes();
        return view('detalleReceta', compact('receta', 'usuario'));
    }

    public function modificarReceta($id){
        $receta = Receta::find($id);
        $receta = $receta->getAttributes();
        return view('modificarReceta', compact('receta'));
    }

    public function update(Request $request){
        $receta = Receta::findOrFail($request->id);
        $receta->idUsuario = Auth::id();
        $receta->titulo = $request->titulo;
        $receta->descripcion = $request->descripcion;
        $receta->tiempo = $request->tiempo;
        $receta->ingredientes = $request->ingredientes;
        $receta->instrucciones = $request->instrucciones;
        $receta->categoria = $request->categoria;
        $receta->save();

        return redirect('/misRecetas')->with('mensaje.confirmacion', 'La receta ha sido actualizada');
    }

    public function destroy(Request $request){
        Receta::destroy($request->id);
        return redirect('/misRecetas')->with('mensaje.confirmacion', 'La receta ha sido eliminada');
    }

    public function buscar(Request $request){
        $busqueda = Receta::where('titulo', 'LIKE', '%'.$request->busqueda.'%')->get();
        $keyWord = $request->busqueda;
        return view('resultadoBusqueda', compact('busqueda', 'keyWord'));
    }

    public function filtrar(Request $request){
        $filtro = Receta::where('categoria', $request->filtro)->get();
        $keyWord = $request->filtro;
        return view('resultadoFiltro', compact('filtro', 'keyWord'));
    }

    public function perfil($id){
        $usuario = User::find($id);
        $usuario = $usuario->getAttributes();
        $recetas = Receta::where('idUsuario', $usuario['id'])->get();
        return view('perfilUsuairo', compact('usuario', 'recetas'));
    }
}
