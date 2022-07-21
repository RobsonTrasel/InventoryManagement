<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::resources([
        'users' => UserController::class,
        'providers' => ProviderController::class,
        'inventory/products' => ProductController::class,
        'clients' => ClientController::class,
        'inventory/categories' => ProductCategoryController::class,
        'transactions/transfer' => TransferController::class,
        'methods' => MethodController::class,
    ]);

    Route::resource('transactions', [TransactionController::class])->except('create', 'show');


});


