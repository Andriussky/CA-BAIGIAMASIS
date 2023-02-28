<?php

use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\PersonController;
use App\Http\Controllers\Admin\ShelfController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\CartController;
use App\Http\Middleware\IsPersonnel;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::group(['middleware' => SetLocale::class], function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('/shelf_content/{shelf_content:slug}', [ShelfController::class, 'show'])->name('shelf_content.show');
    Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('category.show');

//    Route::group(['prefix' => 'cart'], function () {
//        Route::get('/', [CartController::class, 'show'])->name('order.cart');
//        Route::post('pshelf_content/add', [CartController::class, 'create'])->name('shelf_content.add_to_cart');
//        Route::post('shelf_content/{shelf_content}/update', [CartController::class, 'update'])->name('cart.shelf_content_update');
//        Route::delete('shelf_content/{shelf_content}/delete', [CartController::class, 'destroy'])->name('cart.shelf_content_remove');
//    });

    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', IsPersonnel::class]], function () {
        Route::get('/', DashBoardController::class)->name('dashboard');
        Route::delete('/shelf_content/file/{file}', [ShelfController::class, 'destroyFile'])->name('shelf_content.destroy-file');
        Route::resources([
            'shelf_contents'     => ShelfController::class,
            'categories'   => CategoryController::class,
            'orders'       => OrdersController::class,
            'statuses'     => StatusController::class,
            'addresses'    => AddressController::class,
            'users'        => UserController::class,
            'persons'      => PersonController::class,
        ]);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
