<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

use Illuminate\Http\Request;

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

Route::get('/user',[HelloController::class, 'index']);

Route::get('/hello-request',function (Request $request) {
    // ddd($request->header('Sec-Fetch-Dest'));

    // 1.
    $a = [
        'A' => 'abc',
        'B' => 'def'
    ];
    return response($a);

    // 2.
    // return response()->json([
    //     'A' => 'abc',
    //     'B' => 'def'
    // ]);

    // 3.
    // return response([
    //     'A' => 'abc',
    //     'B' => 'def'
    // ]);


});
