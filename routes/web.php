<?php

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

use App\Http\Controllers\RoyController;

/* Route::get('/', function () {
    return view('welcome');
}); */


// Menu Route are here

Route::get('/', 'RoyController@Home');
Route::get('/about-us', 'RoyController@About');
Route::get('/contact-us', 'RoyController@Contact')->name('contact');
Route::get('/blog', 'RoyController@Shoishob')->name('shoishob');


//Category CRUD are here

Route::get('/add-category', 'PostController@Category')->name('addcategory');
Route::post('/store-category','PostController@StoreCategory')->name('storecategory');
Route::get('/all-category', 'PostController@AllCategory')->name('allcategory');
Route::get('/view-category/{id}','PostController@ViewCategory');
Route::get('/delete-category/{id}','PostController@DeleteCategory');
Route::get('/edit-category/{id}', 'PostController@EditCategory');
Route::post('/update-category/{id}', 'PostController@UpdateCategory');


//Post CRUD are Here

Route::get('/post', 'PostController@Post')->name('post');
Route::post('/store-post','PostController@StorePost')->name('storepost');
Route::get('/all-post','PostController@AllPost')->name('allpost');
Route::get('/edit-post/{id}','PostController@EditPost');
Route::post('/update-post/{id}','PostController@UpdatePost');
Route::get('/view-post/{id}','PostController@ViewPost');
Route::get('/delete-post/{id}','PostController@DeletePost');

//Students Routes are Here
Route::get('/students','StudentController@Student')->name('student');
Route::post('/store-student','StudentController@StoreStudent')->name('storestudent');
Route::get('/all-student','StudentController@AllStudent')->name('allstudent');
Route::get('/view-student/{id}','StudentController@ViewStudent');
Route::get('/delete-student/{id}','StudentController@DeleteStudent');
Route::get('/edit-student/{id}','StudentController@EditStudent');
Route::post('/update-student/{id}','StudentController@UpdateStudent');

























Route::get('/me', function(){
    return view('me',['me'=>'This is ROY']);
});
Route::get('/home', function(){
    return view('home',['home'=>'Laravel Home']);
});
Route::get('/roy', function(){
    return view('roy',['roy'=>'This is Roy']);
})->middleware('roy');
Route::get('asr', function(){
    return view('asr', ['asr'=>'ASR AVISHEK']);
})->middleware('asr');










