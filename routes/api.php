<?php

use Illuminate\Http\Request;

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
        $package = DB::table('packages')->where('id', '=', $id)->get()[0];
        return ['package' => $package];
    } catch (Exception $ex) {
        abort(404);
    }
});
