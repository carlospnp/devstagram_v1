<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/{user}', [PostController::class, 'index'])->name('posts.index');

// // Rutas para el perfil
// Route::get('/editar-perfil', [PerfilController::class, 'index'])->name('perfil.index');
// Route::post('/editar-perfil', [PerfilController::class, 'store'])->name('perfil.store');


// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/{user:username}/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

// Route::post('/{user:username}/posts/{post}', [ComentarioController::class, 'store'])->name('comentarios.store');
// Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');

// // Like a las fotos
// Route::post('/posts/{post}/likes', [LikeController::class, 'store'])->name('posts.likes.store');
// Route::delete('/posts/{post}/likes', [LikeController::class, 'destroy'])->name('posts.likes.destroy');
// Route::get('/{user:username}', [PostController::class, 'index'])->name('posts.index');

// // Siguiendo a Usuarios
// Route::post('/{user:username}/follow', [FollowerController::class, 'store'])->name('users.follow');
// Route::delete('/{user:username}/unfollow', [FollowerController::class, 'destroy'])->name('users.unfollow');