<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Ilham Fatahillah",
        "email" => "ilhamfatahillahr@gmail.com"
    ]);
});

Route::get('/posts', function () {

    // $posts = Post::all();
    //A
    // $posts = collect(File::files(resource_path("posts")))
    // ->map(fn($file) => YamlFrontMatter::parseFile($file))
    // ->map(fn($document) => new Post(
    //     $document->title,
    //     $document->date,
    //     $document->excerpt,
    //     $document->body(),
    //     $document->slug
    // ));

    //Sama seperti A diatas
    // $posts = array_map(function ($file) {
    //     $document = YamlFrontMatter::parseFile($file);

    //     return new Post(
    //         $document->title,
    //         $document->date,
    //         $document->excerpt,
    //         $document->body(),
    //         $document->slug
    //     );
    // }, $files);

    return view('posts',[
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post}', function ($slug) {

    return view('post', [
        'post' => Post::findOrFail($slug)
    ]);
})->where(['post', '[A-z_\-]+']);
