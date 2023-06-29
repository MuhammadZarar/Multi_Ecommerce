<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
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

Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'website_view')->name('website_view');
    // Route::post('/user-check', 'login_check')->name('login_check');
    // Route::get('/dashboard', 'dashboard')->name('dashboard');
    // Route::get('/logout', 'logout')->name('logout');
});


// Admin Side Work

Route::controller(UserController::class)->group(function () {
    Route::get('/cms', 'login_view')->name('login_view');
    Route::post('/user-check', 'login_check')->name('login_check');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/logout', 'logout')->name('logout');

    // Route::get('/user/user-add', 'index')->name('add_user');
    // Route::post('/user/user-store', 'store')->name('store_user');
    // Route::get('/user/user-list', 'list')->name('list_user');
    // Route::get('/user/user-get', 'getUser')->name('get_user');
    // Route::get('/user/user-edit/{code}', 'edit')->name('edit_user');
    // Route::post('/user/user-update', 'update')->name('update_user');
    // Route::post('/user/user-delete', 'delete')->name('delete_user');
    // Route::post('/user/user-enable', 'enable')->name('enable_user');
    // Route::post('/user/user-disable', 'disable')->name('disable_user');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/category-add', 'add_category')->name('add_category');
    Route::post('/category-store', 'store_category')->name('store_category');
    Route::get('/category-list', 'list_category')->name('list_category');
    Route::get('/category-get', 'get_category')->name('get_category');
    Route::get('/category-edit/{code}', 'edit_category')->name('edit_category');
    Route::post('/category-update', 'update_category')->name('update_category');
    Route::delete('/category-delete/{code}', 'delete_category')->name('delete_category');
});

Route::controller(SubCategoryController::class)->group(function () {
    Route::get('/sub-category-add', 'add_sub_category')->name('add_sub_category');
    Route::post('/sub-category-store', 'store_sub_category')->name('store_sub_category');
    Route::get('/sub-category-list', 'list_sub_category')->name('list_sub_category');
    Route::get('/sub-category-get', 'get_sub_category')->name('get_sub_category');
    Route::get('/sub-category-edit/{code}', 'edit_sub_category')->name('edit_sub_category');
    Route::post('/sub-category-update', 'update_sub_category')->name('update_sub_category');
    Route::delete('/sub-category-delete/{code}', 'delete_sub_category')->name('delete_sub_category');
});

Route::controller(BrandController::class)->group(function () {
    Route::get('/brand-add', 'add_brand')->name('add_brand');
    Route::post('/brand-store', 'store_brand')->name('store_brand');
    Route::get('/brand-list', 'list_brand')->name('list_brand');
    Route::get('/brand-get', 'get_brand')->name('get_brand');
    Route::get('/sub-category-edit/{code}', 'edit_brand')->name('edit_brand');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/product-add', 'add_product')->name('add_product');
    Route::get('/product-list', 'list_product')->name('list_product');
});

Route::controller(OrderController::class)->group(function () {
    Route::get('/order-list', 'list_order')->name('list_order');
});
