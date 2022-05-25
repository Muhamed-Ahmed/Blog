<?php
use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
/*
Route::get('/hello', function () {
    return view('hello', 
    ['name' => 'hamza', 'age' => 26, 'books' => [
        'story',
        'novel',
        'comic'
    ]]);
});
*/

Route::get('/hello',[HelloController::class , 'helloAction'] );
Route::get('/hello2', [HelloController::class , 'helloAction2']);


//new route
Route::get('/posts', [PostController::class , 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/Posts', [PostController::class, 'store'])->name('Posts.store');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::get('/posts/{post}', [PostController::class , 'show'])->name('posts.show');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
