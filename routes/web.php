<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;

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

Route::get('/',[TodoListController::class, 'showAllData'])->name('home');

Route::get('user/{id}',[TodoListController::class, 'showUserData'])->name('user.todo');

Route::get('create',[TodoListController::class, 'create']);

Route::post('save_new_list',[TodoListController::class, 'todo_submit']);

Route::get('delete/{id}',[TodoListController::class, 'delete']);

Route::post('edit/{id}',[TodoListController::class, 'edit_submit']);

Route::get('edit/{id}',[TodoListController::class, 'edit']);


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//For User
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});
//For Admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});