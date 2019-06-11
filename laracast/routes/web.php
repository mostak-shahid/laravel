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
Route::get('/projects', 'ProjectController@index');
Route::get('/project/create', 'ProjectController@create');
Route::post('/project/store', 'ProjectController@store');
