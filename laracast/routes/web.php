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
Route::get('/', 'PagesController@home');
/*Route::get('/', function () {
	//Way of sending data to view
	// $tasks = [
	// 	'Go to the store',
	// 	'Go to the market',
	// 	'Go to work',
	// 	'Go to the concert',
	// ];
    //return view('welcome');
    // return view('welcome',[
    // 	'tasks' => $tasks,
    // 	'foo' => 'Foobar',
    // 	'request' => request('title'),
    // 	'script' => '<script>alert("Foobar")</script>'
    // ]);
    //return view('welcome')->withTasks($tasks)->withFoo('foo');
	// return view('welcome')->withTasks([
	// 	'Go to the store',
	// 	'Go to the market',
	// 	'Go to work',
	// 	'Go to the concert',
 	//    ]);
    return view('welcome')->with([
		'foo' => 'Foobar',
    	'tasks' => [
			'Go to the store',
			'Go to the market',
			'Go to work',
			'Go to the concert',
		],
    ]);
});*/
Route::get('/about', 'PagesController@about');
// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/contact', 'PagesController@contact');
// Route::get('/contact', function () {
//     return view('contact');
// });
/*
	GET /projects (index)
	GET /projects/create (create)
	POST /projects (store)
	GET /projects/1 (show)
	GET /projects/1/edit (edit)
	PATCH /projects/1 (update)
	DELETE /projects/1 (destroy)
*/
Route::resource('projects','ProjectsController');

// Route::get('/projects', 'ProjectsController@index');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', 'ProjectsController@destroy');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
Route::post('/projects/{project}/tasks',  'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
//https://www.youtube.com/watch?v=xjLLr4WQWzw
Route::post('/login/custom',[
	'uses' => 'LoginController@login',
	'as' => 'login.custom',
]);
Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', function(){
		return view('home');
	})->name('home');
	Route::get('/dashboard', function(){
		return view('dashboard');
	})->name('dashboard');
});
