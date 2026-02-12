<?php

use App\Models\Posts;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home', ['title'=> 'Home Page']); // Passing data ke view - $title untuk judul halaman
});

Route::get('/blog', function () {

    $posts = Posts::with(['author', 'category'])->latest()->get();
    return view('blog', ['title' => 'Blog Page', 'posts' => $posts]);
});

Route::get( '/blog/{posts:slug}', function (Posts $posts){

    if(!$posts) abort(404);

    $posts->load('author');

    return view( 'post', ['title' => $posts['title'], 'post' => $posts]);

});
Route::get( '/author/{user:username}', function (User $user){
    $posts = $user->posts->load(['category', 'author']);
    return view( 'blog', [
        'title' => $posts->count() . ' Articles by '. $user->name,
        'posts' => $posts
    ]);

});

Route::get( '/city/{city}', function ($city){
    $posts = Posts::where('city', $city)->with(['category', 'author'])->get();
    return view( 'blog', [
        'title' => $posts->count() . ' Articles on '. $city,
        'posts' => $posts
    ]);

});

Route::get( '/date/{date}', function ($date){

    $posts = Posts::where('date', $date)->with(['category', 'author'])->get();

    return view( 'blog', [
        'title' => $posts->count() . ' Articles on '. $date,
        'posts' => $posts
    ]);
});

Route::get( '/category/{category:slug}', function (Category $category){

    $posts = Posts::where('category_id', $category->id)->with(['category', 'author'])->get();

    return view( 'blog', [
        'title' => $posts->count() . ' Articles About '. $category->name,
        'posts' => $posts
    ]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
