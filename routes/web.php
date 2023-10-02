<?php

use Illuminate\Support\Facades\Route;

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
    return view('posts');
});

Route::get("/posts/{postId}", function($postId) {
    $path = resource_path("posts/$postId.html");

    $post = file_get_contents($path);
    
    return view('post', [
        'post' => $post
    ]);
});
