<?php

use App\Http\Controllers\ManageController;
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

Route::get("/Manager", [ManageController::class,'index'])->name('Manager');

Route::get("/",[ManageController::class,'user'])->name('User');

Route::get("/createpost", [ManageController::class,'createpost'])->name('Createpost');

Route::post("/creatpost/post", [ManageController::class,'post'])->name('Post');

Route::get('/Manager/delete/{id}', [ManageController::class,'delete'])->name('Delete');

Route::get('/Manager/Edit/{id}', [ManageController::class,'edit'])->name('Edit');

Route::post('/Manager/Edit/Edit2/{id}', [ManageController::class,'edit2'])->name('Edit2');

Route::get("/Login/Register",[ManageController::class,'register'])->name('Register');

Route::get("/Register/Login",[ManageController::class,'login'])->name('Login');

Route::post("/Register/Manger",[ManageController::class,'action_register'])->name('Action_register');

Route::post("/Login/Manger",[ManageController::class,'actionlogin'])->name('Actionlogin');

Route::get("/User_admin/Manage",[ManageController::class,'user_admin'])->name('User_admin');


Route::get('Login', function () {
    return view('Login');
})->name('Login');
Route::get('Manage', function () {
    return view('Manage');
})->name('Manage');

