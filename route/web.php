<?php

use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('plat', 'TestController@plat');
//
//
//Route::get('idd/{id}', 'TestController@idd')
//    ->where(['id' => '[0-9]+']);
////单个       ->where('id','[a-z]+');
////解除全局约束 ->where('id','.*');
//
//Route::get('test', 'TestController@index');
////    ->name('did');
//
//Route::get('Conn', [TestController::class,'testData']);
//
//Route::match(['post','get'],'match',[TestController::class,'Test']);

Route::get('new-employee', [NewController::class,'getNewEmployeeData']);

Route::get('new-employee/{id}', [NewController::class,'getNowEmployeeData'])
    ->where(['id' => '[0-9]+']);

Route::post('new-steps', [NewController::class,'nowSteps']);

Route::post('new-answer', [NewController::class,'nowAnswer']);

