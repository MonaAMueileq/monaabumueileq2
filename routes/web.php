<?php

use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
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
//لجزء الأول تمرير البيانات من المتحكم إلى واجهة المستخدم
Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    $name = 'mona abu mueileq';
    return view('about', compact('name' ));
});
// الجزء الثاني تمرير البيانات من واجهة المستخدم إلى المتحكم
Route::post('send', function (HttpRequest $request) {
    $name = $request->myname ;
    return view('about', compact('name' ));
});
