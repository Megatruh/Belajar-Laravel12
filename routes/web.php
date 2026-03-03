<?php

use App\Models\Posts;
use App\Models\Category;
use Illuminate\Support\Facades\Route;




Route::get('/', function (Posts $posts) {
    return view('home', [
        'title'=> 'Home Page',
        'posts' => $posts
    ]); // Passing data ke view - $title untuk judul halaman
});

Route::get('/blog', function () {
    $posts = Posts::filter(request(['keyword', 'category', 'author', 'city']))->get();

    return view('blog', ['title' => 'Blog Page', 'posts' => $posts]);
});

Route::get( '/blog/{posts:slug}', function (Posts $posts){

    return view( 'post', [
        'title' => $posts['title'],
        'post' => $posts
    ]);

});


Route::get( '/blog?city={city}', function ($city){
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

Route::get( '/blog?category={category:slug}', function (Category $category){

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
