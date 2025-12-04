<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Models\Post;

// Home Controller
Route::get('/', [HomeController::class, 'index'])->name('home');
//


////DATA Show Methode////
// Post Controller //
Route::get('/posts', [PostController::class, 'index']);
//

////DATA Post Standard Methode////
Route::get('/create-post', [PostController::class, 'create'] );
//

////DATA Update Standard Methode////
Route::get('/update-post', [PostController::class, 'edit']);
//

////Or Another Way to DATA Delete ////
Route::get('/delete-post', [PostController::class, 'destroy']);
//

//
Route::get('/blog', [BlogController::class, 'index'])->name("blog");
//

Route::get('/article/{post}', [BlogController::class, 'single'])->name('single-post');

Route::get('/model-test', [BlogController::class, 'model_test']);

// Route::get('/post/{id}', function($post_id){
//     $single_post = Post::find($post_id);

// Route::get('/post/{post::slug}', function(Post $post){
//     dd($post->content);
// });

Route::get('category/{category:slug}', [BlogController::class, 'categoryWisePosts']);

Route::get('users/{user:username}', [BlogController::class, 'userBasedPost'])->name('user-post');