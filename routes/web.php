<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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

// Route::get('/',function(){
//     dd(env('DB_HOST'));
//     return view('welcome');
// });


Route::prefix('/blog')->group(function(){



Route::get('/',[PostController::class,'index'])->name('blog.index');
Route::get('/{id}/{name}/',[PostController::class,'show'])->name('blog.show');

Route::get('/create',[PostController::class],'create')->name('blog.create');
//PUT OR PATCH
Route::get('/edit/{id}',[PostController::class],'edit')->name('blog.edit');
Route::patch('/{id}',[PostController::class],'update')->name('blog.update');
// // DELETE 
Route::get('/{id}',[PostController::class],'destroy')->name('blog.destroy');

// Route::match(['POST','GET'],'/',[PostController::class,'index']);
// Route::any('/',[PostController::class,'index']);
// Route::view('/','blog.index',['name'=>'Mohamed Ashraf']);
// Route::redirect('/contact','/');


});
Route::get('/',function(){
    return view('auth.login');
});
Route::fallback(fallbackController::class);

Auth::routes();

Route::get('/home',function(){
   
    // $users=User::orderBy('id','desc')->take(10)->get();
    // // dd($users);
    // User::chunk(25,function($users){
    //     foreach($users as $user){
    //         echo $user->name;
    //     }
    // });
    // $posts=User::get()->count();
    // dd($posts);

    return view('home',['users'=>User::get()]);
})->middleware('auth')->name('home');
// Route::get('/home', ['middleware'=>'auth', 'uses'=>'HomeController@show']);