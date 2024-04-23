<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewPostController;
use App\Models\Post;

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
    return view('welcome');
});

Route::get('/user-profile', [\App\Http\Controllers\UserProfileController::class, 'index'])->name('users.profiles');
Route::get('/user-profile/{id}', [\App\Http\Controllers\UserProfileController::class, 'specific'])
->name('user.profile')
->middleware('auth.user');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/posts', function () {
    $posts = Post::all(); // Récupérer tous les posts
    return view('posts.index', compact('posts') );
});

// Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::middleware('auth')->group(function () {

   
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update', 'updateBio'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/posts/create', [NewPostController::class, 'create'])->name('posts.create');
Route::post('/posts', [NewPostController::class, 'store'])->name('posts.store');

require __DIR__.'/auth.php';
