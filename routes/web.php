<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Murtaki, S.Kom",
        "email" => "murtakibangko@gmail.com",
        "img" => "foto.jpeg"
    ]);
});

// Route::get('/posts', function () {
//     return view('posts', [

//     ]);
// });
// Route::get('/post/{slug}', function($slug){
//     // $new_post =[];
//     // foreach($my_posts as $post){
//     //     if($post["slug"]=== $slug){
//     //         $new_post = $post;
//     //     }
//     // }
//     return view('post',[
//         "title" => "Detail Post",
//         "post" =>Post::find($slug)
//     ]);
// });

Route::get('/posts', [PostController::class, 'index']);
Route::get('post/{slug}', [PostController::class, 'show']);
