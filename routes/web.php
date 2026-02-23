<?php

use App\Models\Posts;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;




Route::get('/', function (Posts $posts) {
    return view('home', [
        'title'=> 'Home Page',
        'posts' => $posts
    ]); // Passing data ke view - $title untuk judul halaman
});

Route::get('/blog', function () {

    // $posts = Posts::with(['author', 'category'])->latest()->get();
    // return view('blog', ['title' => 'Blog Page', 'posts' => $posts]);

    $posts = Posts::latest()->get();
    return view('blog', ['title' => 'Blog Page', 'posts' => $posts]);
});

// Search route
Route::get('/search', function () {
    $query = request('keyword');


    $posts = Posts::latest()
        ->where('title', 'like', '%' . $query . '%')
        ->orWhere('city', 'like', '%' . $query . '%')
        ->get();

    return view('blog', [
        'title' => 'Hasil pencarian: ' . $query,
        'posts' => $posts
    ]);
});

Route::get( '/blog/{posts:slug}', function (Posts $posts){

    return view( 'post', [
        'title' => $posts['title'],
        'post' => $posts
    ]);

});
Route::get( '/author/{user:username}', function (User $user){

    // $posts = $user->posts->load(['category', 'author']);
    // return view( 'blog', [
    //     'title' => $posts->count() . ' Articles by '. $user->name,
    //     'posts' => $posts
    // ]);

    $posts = $user->posts;
    return view( 'blog', [
        'title' => $posts->count() . ' Articles by '. $user->name,
        'posts' => $posts
    ]);

});

Route::get( '/city/{city}', function ($city){
    // $posts = Posts::where('city', $city)->with(['category', 'author'])->get();
    // return view( 'blog', [
    //     'title' => $posts->count() . ' Articles on '. $city,
    //     'posts' => $posts
    // ]);

    $posts = Posts::where('city', $city)->get();
    return view( 'blog', [
        'title' => $posts->count() . ' Articles on '. $city,
        'posts' => $posts
    ]);

});

Route::get( '/date/{date}', function ($date){

    // $posts = Posts::where('date', $date)->with(['category', 'author'])->get();

    // return view( 'blog', [
    //     'title' => $posts->count() . ' Articles on '. $date,
    //     'posts' => $posts
    // ]);

    $posts = Posts::where('date', $date)->get();

    return view( 'blog', [
        'title' => $posts->count() . ' Articles on '. $date,
        'posts' => $posts
    ]);
});

Route::get( '/category/{category:slug}', function (Category $category){

    // $posts = Posts::where('category_id', $category->id)->with(['category', 'author'])->get();

    // return view( 'blog', [
    //     'title' => $posts->count() . ' Articles About '. $category->name,
    //     'posts' => $posts
    // ]);

    $posts = Posts::where('category_id', $category->id)->get();

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
