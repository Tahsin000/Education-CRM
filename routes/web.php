<?php

use App\Http\Controllers\menuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () {
    return view('Admin.Layout.master');
});
// Route::namespace('Admin')->prefix('admin')->group(function(){
//     // Route::get('/', [])
 

   
// });

Route::get('/', [menuController::class, 'index']);
