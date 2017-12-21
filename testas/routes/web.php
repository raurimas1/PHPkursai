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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     $name = 'Jonas';
//     $number = 'ASD123';

//     // $param = [
//     //     'name' => $name,
//     //     'number' => $number
//     // ];

//     $param = compact()
//     //return view('about', ['number' => 'ASD123', 'name' => 'Jonas']);
//     return view('about', $param);
// });

// Route::get('/radars', function () {
//     $radars = [
//         ['number' => 'ASD123', 'speed' => 125],
//         ['number' => 'QWE321', 'speed' => 130],
//         ['number' => 'ZXC159', 'speed' => 117],
        
//     ];
//     return view('radars', compact('radars'));
// });

Route::get('radars', 'RadarsController@index'); 
//{
   // $radars = DB::table('radars')->get();
    // $radars = \App\Radar::all();
    // return view('radars.index', compact('radars'));
    //});

Route::get('radars/create', 'RadarsController@create');
Route::post('radars', 'RadarsController@store');



Route::get('radar/{radar}', 'RadarsController@show'); //{
   // $radar = DB::table('radars')->find($id);
//    $radar = \App\Radar::find($id);
//     return view('radars.show', compact('radar'));
    //});
Route::get('radars/{radar}/edit', 'RadarsController@edit');
Route::put('radars/{radar}', 'RadarsController@update');

Route::get('radars/{radar}/confirmDelete', 'RadarsController@confirmDelete');

Route::delete('radars/{radar}', 'RadarsController@destroy');


Route::get('drivers', 'DriversController@index');
Route::get('drivers/create', 'DriversController@create');
Route::post('drivers', 'DriversController@store');
Route::get('drivers/{driver}', 'DriversController@show');
Route::get('drivers/{driver}/edit', 'DriversController@edit');
Route::put('drivers/{driver}', 'DriversController@update');
Route::get('drivers/{driver}/confirmDelete', 'DriversController@confirmDelete');
Route::delete('drivers/{driver}', 'DriversController@destroy');
