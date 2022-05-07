<?php

use App\Http\Controllers\RecetaController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    $userExists = User::where('external_id', $user->id)->where('external_auth', 'google')->first();

    if($userExists){
        Auth::login($userExists);
    } else {
        $newUser = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google',
        ]);
        Auth::login($newUser);
    }

    return redirect('/home');
});

Auth::routes();

Route::get('/home', [RecetaController::class, 'showAll'])->name('home');

Route::get('/inicio', [RecetaController::class, 'index'])->name('index');

Route::get('/publicar_receta', [RecetaController::class, 'publicarReceta'])->name('publicar_receta');

Route::get('/misRecetas', [RecetaController::class, 'misRecetas'])->name('misRecetas');

Route::get('/detalleReceta/{id}', [RecetaController::class, 'show'])->name('detalleReceta');

Route::get('/modificarReceta/{id}', [RecetaController::class, 'modificarReceta'])->name('modificarReceta');

Route::get('/buscar', [RecetaController::class, 'buscar'])->name('buscar');

Route::get('/filtrar', [RecetaController::class, 'filtrar'])->name('filtrar');

Route::get('/perfilUsuario/{id}', [RecetaController::class, 'perfil'])->name('perfilUsuario');

Route::post('/nuevaReceta', [RecetaController::class, 'store'])->name('nuevaReceta');

Route::post('/actualizarReceta', [RecetaController::class, 'update'])->name('actualizar.receta');

Route::post('/eliminarReceta', [RecetaController::class, 'destroy'])->name('eliminar.receta');



