<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home',['title'=>'Home Page']);
});

Route::get('/posts', function () {
    // $posts = Post::with(['author','category'])->latest()->get();
    dump(request('search'));
    // $posts = Post::latest();
    // if(request('search')){
    //     $posts->where('title','like','%'.request('search').'%');
    // }
    // $posts = Post::latest()->get();
    return view('posts',
        ['title'=>'Blog',
        'posts'=> Post::filter(request(['search','category','author']))->latest()->paginate(10)->withQueryString()
        //use paginate or simplePaginate
    ]);
});
Route::get('posts/{post:slug}',function(Post $post){
    // $post = Post::find($slug);
    return view('post',['title'=>'single post','post'=>$post]);
});
Route::get('authors/{user:username}',function(User $user){
    // $post = Post::find($slug);
    // $posts = $user->posts->load('category','author');
    return view('posts',['title'=> count($user->posts).' articles by '. $user->name,'posts'=>$user->posts]);
});
Route::get('categories/{category:slug}',function(Category $category){
    // $post = Post::find($slug);
    // $posts = $category->posts->load('category','author');
    return view('posts',['title'=> 'Articles in: ' . $category->name,'posts'=>$category->posts]);
});
Route::get('/about', function () {
    return view('about',['title'=>'About','name'=>'ralfazza']);
});
Route::get('/contact', function () {
    return view('contact',['title'=>'Contact']);
});