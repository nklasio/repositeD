<?php

use Illuminate\Http\Request;
use App\Package;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/p/{id}', function($id) {
    try {
        $package = Package::where('id' , '=', $id)->get()[0];
        $package->author = $package->author()->get()[0]->name;
        
        return ['package' => $package];
    } catch (Exception $ex) {
        abort(404);
    }
});

Route::get('/s/{name}', function($name) {
    try {
        $packages = Package::where('name', 'LIKE', '%'.$name.'%')->get();
        return ['packages' => $packages];
    } catch(Exception $ex) {
        abort(404);
    }
});
