<?php

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

    $articles = DB::table('articles')->get();

    $art01 = DB::table('articles')->where('id', 1)->get();
    $art01 = DB::table('articles')->find(1);
    $art01 = DB::table('articles')->where('id', 1)->value('body');
    $art01 = DB::table('articles')->count();
    $art01 = DB::table('articles')->select('slug','body')->get();
    $art01 = DB::table('articles')->orderby('id','desc')->get();
    // $art01 = DB::table('articles')->insert([
    //     'title' => 'TITLE 03 ',
    //     'slug' => 'title-03',
    //     'body' => 'this is a title-03'
    // ]);
    $art01 = DB::table('articles')->where('id', 1)->update([
        'body' => ' This is article 01 the updated'
    ]);

    $art01 = DB::table('articles')->where('id', 4)->delete();
    $art01 = App\Models\Article::all();
    dd($art01);
    return view('welcome');
});


route::get('/index',function(){
    return view('index');
});

route::get('/about',function(){
    return view('about');
});

route::get('/contact',function(){
    return view('contact');
});
