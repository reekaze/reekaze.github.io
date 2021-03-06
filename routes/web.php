<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;
use League\CommonMark\Normalizer\SlugNormalizer;

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
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Albert",
        "email" => "tan.albert53@gmail.com",
        "image" => "albert.jpg",
        "active" => "about"
    ]);
});




Route::get('/blog', [PostController::class,'index']);

//halaman single post
Route::get('posts/{post:slug}', [PostController::class,'show']);

Route::get('categories/{category:slug}',function(Category $category){
    return view('posts',[
        'title'=>"Post by Category : $category->name",
        'posts'=>$category->posts,
        'active'=>'categories'
    ]);
});


Route::get('categories', function () {
    return view('categories',[
        'title'=>'Post Categories',
        'categories'=>Category::all(),
        'active'=>'categories'
    ]);
});

Route::get('/authors/{autho:username}',function(User $autho){
    return view('posts',[
        'title'=>"Post by author : $autho->name",
        'posts'=>$autho->posts,
        'active'=>''
    ]);
});

