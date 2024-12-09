<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('index');
})->name('index');


Route::controller(PageController::class)->group(function () {
    Route::get('/persanalCab', 'PersanalCab')->name('PersanalCab');
    Route::get('/autopark', 'autopark')->name('autopark');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/admin.addEmployee', 'AddEmployee')->name('addEmployee');
    Route::get('/newOrder', 'NewOrder')->name('newOrder');
    Route::get('/orders/{id}', 'show')->name('order.show');
    Route::get('/admin.awards', [PageController::class, 'Awards'])->name('adwards');
});

Route::controller(AdminController::class)->group(function () {
    Route::post('/add_employee', 'add_employee')->name('add_employee');
    Route::get('/admin.admin', 'getEmployees')->name('admin');
    Route::get('/infOrder', 'index')->name('infOrder');
    Route::post('/fire-employee/{userId}', [AdminController::class, 'fireEmployee'])->name('fire.employee');
    Route::get('admin/completed-orders', [AdminController::class, 'completedOrders'])->name('completed-orders');
    Route::get('client', [AdminController::class, 'getUsers'])->name('client');

});

Route::controller(OrderController::class)->group(function () {
    Route::post('newOrder', [OrderController::class, 'store'])->name('newOrder');
    Route::post('orders/{id}/changeStatus', [OrderController::class, 'changeStatus'])->name('changeStatus');
    Route::get('accepted-orders', [OrderController::class, 'showAcceptedOrdersForEmployee'])->name('accepted_orders');
    Route::post('/accepted-orders/update-location/{id}', [OrderController::class, 'updateLocation'])->name('orders.updateLocation');
});

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'processRegistration']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'processLogin']);
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->middleware('auth')->name('logout');

