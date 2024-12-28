<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\pages;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UseraccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Checkuserlogin;

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

Route::get('/', function () {
    return view('Home');
})->name(name: 'main');


Route::get('/singup' , function(){
    return view('projects');
})->name('create');


Route::get('/signin', function () {
    return view(view: 'Login');
})->name('login');



Route::get('/newproject', function () {
    return view(view: 'add_project');
})->name('project')->middleware(Checkuserlogin::class);


Route::resource('account', controller: UseraccountController::class);

Route::resource('addproject', controller: ProjectController::class);


Route::get('/home', function(){
    return view('Home');
})->name('home');


Route::get('/projects', function(){
    return view('Projects');
})->name('projects');


Route::get('/info', function(){
    return view('project_info');
})->name('info');

Route::get('/info1', function(){
    return view('project_info1');
})->name('info1');


Route::get('/ques', function(){
    return view('questions');
})->name(name: 'questions');
