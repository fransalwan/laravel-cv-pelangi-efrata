<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryRecordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardBookingController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardCategoryRecordController;
use App\Http\Controllers\DashboardCustomerController;
use App\Http\Controllers\DashboardItemController;
use App\Http\Controllers\DashboardItemRecordController;
use App\Http\Controllers\DashboardOfferController;
use App\Http\Controllers\DashboardPelangganController;
use App\Http\Controllers\DashboardSupplierController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemRecordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PurchaseItemController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SalesReportController;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

// Barang 
Route::get('/items', [ItemController::class, 'index']);

// Halaman single item
Route::get('items/{item:slug}', [ItemController::class, 'show']);

// Halaman category
Route::get('/categories', [CategoryController::class, 'index']);

// halaman Pemesanan dan Penawaran
Route::get('/booking_offer_form', [ContactController::class, 'index']);
Route::resource('/contact-form', ContactController::class);

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/procedure', function () {
    return view('procedure', [
        "title" => "Prosedur"
    ]);
});

// Halaman Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Halaman Dashboard
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

// Halaman Dashboard Admin

Route::get('/dashboard/items/checkSlug', [DashboardItemController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/items', DashboardItemController::class)->middleware('admin');

Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/categories', DashboardCategoryController::class)->middleware('admin');

// Penjualan
Route::get('dashboard/cetak-data-booking-form', [DashboardBookingController::class, 'cetakForm'])->middleware('admin');
Route::get('dashboard/booking/cetak-data-pertanggal/{tglawal}/{tglakhir}', [DashboardBookingController::class, 'cetakBookingPertanggal'])->middleware('admin');
Route::get('dashboard/booking/downloadPDF/{tglawal}/{tglakhir}', [DashboardBookingController::class, 'downloadPDF'])->middleware('admin');
Route::resource('/dashboard/booking', DashboardBookingController::class)->middleware('admin');

// Pemebelian
Route::get('dashboard/cetak-data-offer-form', [DashboardOfferController::class, 'cetakForm'])->middleware('admin');
Route::get('dashboard/offer/cetak-data-pertanggal/{tglawal}/{tglakhir}', [DashboardOfferController::class, 'cetakOfferPertanggal'])->middleware('admin');
Route::get('dashboard/offer/downloadPDF/{tglawal}/{tglakhir}', [DashboardOfferController::class, 'downloadPDF'])->middleware('admin');
Route::resource('/dashboard/offer', DashboardOfferController::class)->middleware('admin');

// Pelanggan
Route::resource('/dashboard/pelanggan', DashboardPelangganController::class)->middleware('admin');

// Supplier
Route::resource('/dashboard/supplier', DashboardSupplierController::class)->middleware('admin');








