<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuFrontController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReservationController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\SuperAdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// Routes accessibles à tous les utilisateurs authentifiés
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::user()->hasRole('superadmin')) {
            return redirect()->route('superadmin.users.index');
        }
        return view('dashboard');
    })->name('dashboard');



    // Routes du SuperAdmin
    Route::middleware([SuperAdminMiddleware::class])->group(function () {
        // Placez ici les routes du SuperAdmin
        Route::get('superadmin/index', [SuperAdminController::class, 'index'])->name('superadmin.index');
        Route::get('superadmin/restaurants/create', [RestaurantController::class, 'create'])->name('superadmin.restaurants.create');
        Route::post('admin/restaurants', [RestaurantController::class, 'store'])->name('admin.restaurants.store');
        Route::get('superadmin/restaurants/index', [RestaurantController::class, 'index'])->name('superadmin.restaurants.index');
        Route::get('superadmin/users/index', [AdminController::class, 'index'])->name('superadmin.users.index');
        Route::get('/superadmin/users/create', [AdminController::class, 'create'])->name('superadmin.users.create');
        Route::post('/superadmin/users', [AdminController::class, 'store'])->name('superadmin.users.store');
        Route::get('/superadmin/restaurants/create', [RestaurantController::class, 'create'])->name('superadmin.restaurants.create');
        Route::post('/superadmin/restaurants', [RestaurantController::class, 'store'])->name('superadmin.restaurants.store');
        Route::get('superadmin/users/{id}/edit', [AdminController::class, 'edit'])->name('superadmin.users.edit');
        Route::put('superadmin/users/{id}', [AdminController::class, 'update'])->name('superadmin.users.update');
        Route::delete('superadmin/users/{id}', [AdminController::class,'destroy'])->name('superadmin.users.destroy');
        Route::get('superadmin/restaurants/{id}/edit', [RestaurantController::class , 'edit'])->name('superadmin.restaurants.edit');
        Route::put('superadmin/restaurants/{id}', [RestaurantController::class, 'update'])->name('superadmin.restaurants.update');
        Route::delete('superadmin/restaurants/{id}', [RestaurantController::class,'destroy'])->name('superadmin.restaurants.destroy');
        Route::get('/errors/error-403', function () {
            return view('errors.error-403');
        })->name('errors.error-403');

    });

    // Routes de l'Admin
    Route::middleware([AdminMiddleware::class])->group(function () {
        Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
        // Autres routes de l'Admin...
        Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::put('admin/categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('admin/categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
        Route::get('admin/plats', [PlatController::class, 'index'])->name('admin.plats.index');
        Route::get('admin/plats/create', [PlatController::class, 'create'])->name('admin.plats.create');
        Route::post('admin/plats', [PlatController::class, 'store'])->name('admin.plats.store');
        Route::get('admin/plats/{plat}/edit', [PlatController::class,'edit'])->name('admin.plats.edit');
        Route::put('admin/plats/{plat}', [PlatController::class,'update'])->name('admin.plats.update');
        Route::delete('admin/plats/{plat}', [PlatController::class, 'destroy'])->name('admin.plats.destroy');
        Route::get('admin/menus', [MenuController::class, 'index'])->name('admin.menus.index');
        Route::get('admin/menus/create', [MenuController::class, 'create'])->name('admin.menus.create');
        Route::post('admin/menus', [MenuController::class, 'store'])->name('admin.menus.store');
        Route::get('admin/menus/{menu}/edit', [MenuController::class, 'edit'])->name('admin.menus.edit');
        Route::put('admin/menus/{menu}', [MenuController::class, 'update'])->name('admin.menus.update');
        Route::delete('admin/menus/{menu}', [MenuController::class, 'destroy'])->name('admin.menus.destroy');
        Route::get('admin/plats/trier', [PlatController::class, 'trierPlats'])->name('admin.plats.trier');
        Route::get('admin/reservations', [ReservationController::class, 'showReservations'])->name('admin.reservations');
        Route::get('admin/reservation',[ReservationController::class , 'index'])->name('admin.reservation.index');

        Route::get('/front-menu',function () {
            return view('front-menu');
        });
        Route::get('/front-menu', [MenuFrontController::class, 'showMenu']);

        Route::get('/menu', [MenuController::class, 'showMenu'])->name('client.menu');
Route::post('/menu/add-to-cart/{plat}', [OrderController::class, 'addToCart'])->name('client.add-to-cart');

Route::post('/client/reservation', [ReservationController::class, 'makeReservation'])->name('client.make-reservation');



// Route::get('/menu', [MenuController::class, 'showMenu'])->name('client.menu');
// Route::post('/menu/add-to-cart/{plat}', [OrderController::class, 'addToCart'])->name('client.add-to-cart');
// Route::post('/order', [OrderController::class, 'placeOrder'])->name('client.place-order');

Route::post('/reservation', [ReservationController::class, 'makeReservation'])->name('client.make-reservation');

        Route::get('/errors/error-403', function () {
            return view('errors.error-403');
        })->name('errors.error-403');

    });
    Route::get('/reservation', [ReservationController::class, 'showReservationsForm'])->name('client.reservation.form');
Route::post('/reservation', [ReservationController::class, 'makeReservation'])->name('client.make-reservation');
});

Route::get('/front-menu/{id}', [MenuFrontController::class, 'showMenuById'])->name('front-menu.showById');
Route::get('/Shop/{id}', [CartController::class, 'seeShop'])->name('Shop.showById');
Route::get('/get-cart', [CartController::class, 'getCart'])->name('cart.get');
Route::post('/add-to-cart', [CartController::class, 'addToCart']);


Route::get('/shop-detail/{id}', [ShopController::class, 'show'])->name('shop-detail');



Route::get('/Resto', [MenuFrontController::class, 'showthatMenu'])->name('Resto.showthatMenu');

Route::get('/Resto/{id}', [MenuFrontController::class, 'showMenuParId'])->name('Resto.showById');

// Route::get('/client/book-table/{id}', [ReservationController::class, 'showReservationForm'])->name('client.book-table');
// Route::post('/reservation', [ReservationController::class, 'makeReservation'])->name('client.make-reservation');
// routes/web.php
// routes/web.php
Route::get('/client/book-table/{id}', [ReservationController::class, 'showReservationForm'])->name('client.book-table');
Route::post('/reservation', [ReservationController::class, 'makeReservation'])->name('client.make-reservation');
Route::get('restaurant/{id}/reservation', [ReservationController::class, 'showReservationForm'])->name('client.reservation.form');
Route::post('restaurant/reservation', [ReservationController::class, 'makeReservation'])->name('client.reservation.submit');
Route::get('/Resto/{id}', [MenuFrontController::class, 'showMenuParId'])->name('Resto.showById');

