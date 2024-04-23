<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;

Route::get('/', [
    SiteController::class,
    'index'
]);
Route::get('signup', [
    UserController::class,
    'signup'
]);
Route::post('signup', [
    UserController::class,
    'signup'
]);
Route::get('login', [
    UserController::class,
    'login'
]);
Route::post('login', [
    UserController::class,
    'login'
]);
Route::post('logout', [
    UserController::class,
    'logout'
]);
Route::get("admin-profile", function () {
    return view("frontend.layouts.admin.dashboard-index");
});

Route::get("blog", function () {
    return view("frontend.layouts.admin.blog_index");
});
