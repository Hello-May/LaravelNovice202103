<?php

use App\Http\Controllers\FizzBuzzController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

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


Route::get('/hello', [HelloController::class, 'index']);


Route::get('/hello-request', function (Request $request) {
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


Route::get('/test', function (Request $request) {
    return 'hi~test';
});


Route::get('/fizzbuzz/{input}', [FizzBuzzController::class, 'index']);


Route::get('/Q1/{input}', function ($input) {
    $num = $input;
    $str = '';

    do {
        $mod = $num % 1000;
        $str = ($mod === 0 ? '000' : (string)($mod)) . (!!$str ? (',' . $str) : $str);
        $num = floor($num / 1000);
        // dump($mod);
        // dump($str);
        // dump($num);
        // dump('-----------------');
    } while ($num >= 1);

    // dump('-------end----------');
    dump($str);
    return $str;
});


Route::get('/Q2/{input}', function ($input) {

    if ($input === 0) return 0;

    $n = $input % 9;

    return $n % 9 === 0 ? 0 : $n;
});


Route::get('/Q3/{date1}/{date2}', function ($date1, $date2) {

    return $date1 . ' ' . $date2;
});
