<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Validator;

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


Route::prefix('admin')->group( function(){

    Route::get('/articles/create', function () {

        return view('admin.articles.create');
    });

    Route::post('/articles/create', function () {

        // dd(request()->all());

        // App\Models\Article::create([
        //     'title' => request('title'),
        //     'slug' => request('title'),
        //     'body' => request('body')

        // ]);


        $validate_data = Validator::make(request()->all(),[
            'title' => 'required|min:5',
            'body' => 'required'
        ])->validated();

        Article::create([
            'title' => $validate_data['title'],
            'slug' => $validate_data['title']."0",
            'body' => $validate_data['body']

        ]);

        return redirect('/admin/articles/create');

    });
});
