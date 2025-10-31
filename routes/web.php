<?php

use App\Http\Controllers\AuthC;
use App\Http\Controllers\DashC;
use App\Http\Controllers\DiagnosaC;
use App\Http\Controllers\IcdC;
use App\Http\Controllers\dokter\DokterC;
use App\Http\Controllers\farmasi\FarmasiC;
use App\Http\Controllers\inventory\CategoryC;
use App\Http\Controllers\inventory\MedicineC;
use App\Http\Controllers\Inventory\TransactionC;
use App\Http\Controllers\inventory\TransactionsC;
use App\Http\Controllers\NotificationC;
use App\Http\Controllers\pasien\PasienC;
use App\Http\Controllers\ResepC;
use App\Http\Controllers\resepsionis\ResepsionisC;
use App\Http\Controllers\RujukanC;
use App\Http\Controllers\VisitC;
use App\Models\Medicine;
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
    return view('auth.login');
});

Route::get('/dashboard', [DashC::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/resepsionis/dashboard', [DashC::class, 'resepsionis'])->middleware('auth')->name('resepsionis.dashboard');
Route::get('/farmasi/dashboard', [DashC::class, 'farmasi'])->middleware('auth')->name('farmasi.dashboard');
Route::get('/dokter/dashboard', [DashC::class, 'dokter'])->middleware('auth')->name('dokter.dashboard');


Route::get('/login', [AuthC::class, 'login'])->name('login');
Route::post('/login', [AuthC::class, 'loginStore'])->name('login.store');
Route::get('/register', [AuthC::class, 'register'])->name('register');
Route::post('/register', [AuthC::class, 'registerStore'])->name('register.store');
Route::get('/logout', [AuthC::class, 'logout'])->name('logout');

Route::get('/pasien-lama', [PasienC::class, 'pasienLama'])->name('pasien.lama');

Route::prefix('pasien')->name('pasien.')->group(function () {
    Route::get('/', [PasienC::class, 'index'])->name('table');       // /pasien
    Route::get('/create', [PasienC::class, 'create'])->name('form'); // /pasien/create
    Route::post('/store', [PasienC::class, 'store'])->name('store'); // /pasien/store
    Route::get('/pasien/view/{id}', [PasienC::class, 'view'])->name('view'); // Route untuk update pasien
    Route::post('/pasien/{id}', [PasienC::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [PasienC::class, 'delete'])->name('delete'); // <- hapus 'dokter/'
    Route::get('/periksa', [PasienC::class, 'periksa'])->name('periksa'); // /pasien/store
    Route::get('/pasien/{id}/print', [PasienC::class, 'printCard'])
        ->name('print');
});

Route::prefix('dokter')->name('dokter.')->group(function () {
    Route::get('/', [DokterC::class, 'index'])->name('table');
    Route::get('/create', [DokterC::class, 'create'])->name('form');
    Route::post('/store', [DokterC::class, 'store'])->name('store');
    Route::get('/view/{id}', [DokterC::class, 'view'])->name('view');
    Route::put('/update/{id}', [DokterC::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [DokterC::class, 'delete'])->name('delete'); // <- hapus 'dokter/'
});

Route::prefix('resepsionis')->name('resepsionis.')->group(function () {
    Route::get('/', [ResepsionisC::class, 'index'])->name('table');       // /pasien
    Route::get('/create', [ResepsionisC::class, 'create'])->name('form'); // /pasien/create
    Route::post('/store', [ResepsionisC::class, 'store'])->name('store'); // /pasien/store
    Route::get('/view/{id}', [ResepsionisC::class, 'view'])->name('view');
    Route::put('/update/{id}', [ResepsionisC::class, 'update'])->name('update');
    Route::delete('/resepsionis/{id}', [ResepsionisC::class, 'delete'])->name('delete');
    // <- hapus 'dokter/'
});

Route::prefix('farmasi')->name('farmasi.')->group(function () {
    Route::get('/', [FarmasiC::class, 'index'])->name('table');
    Route::get('/create', [FarmasiC::class, 'create'])->name('create');
    Route::post('/store', [FarmasiC::class, 'store'])->name('store');
    Route::get('/{id}/edit', [FarmasiC::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [FarmasiC::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [FarmasiC::class, 'destroy'])->name('delete');
    Route::get('/resep/{resep}', [FarmasiC::class, 'show'])
        ->name('resep.detail');
});


Route::prefix('icd')->name('icd.')->group(function () {
    Route::get('/import-icd', [IcdC::class, 'importFromCdcTxt']);
    Route::get('/', [IcdC::class, 'index'])->name('form');
    Route::get('/icd/search', [IcdC::class, 'searchICD'])->name('search');
});

Route::prefix('visit')->name('visit.')->group(function () {
    Route::get('/', [VisitC::class, 'index'])->name('table'); // <- ini untuk menampilkan tabel
    Route::get('/create', [VisitC::class, 'create'])->name('create');
    Route::post('/store', [VisitC::class, 'store'])->name('store');
    Route::get('/{id}/view', [VisitC::class, 'view'])->name('visit.view');

    // ini untuk diagnosa
    Route::get('/{id}/periksa', [DiagnosaC::class, 'create'])->name('periksa');
    Route::post('/{id}/periksa/store', [DiagnosaC::class, 'store'])->name('periksa.store');
});

Route::prefix('rujukan')->name('rujukan.')->group(function () {
    Route::get('/', [RujukanC::class, 'index'])->name('table');       // /pasien
    Route::get('/create', [RujukanC::class, 'create'])->name('form'); // /pasien/create
    Route::post('/store', [RujukanC::class, 'store'])->name('store'); // /pasien/store
});

// Category
Route::prefix('category')->name('category.')->group(function () {
    Route::get('/', [CategoryC::class, 'index'])->name('table');
    Route::get('/create', [CategoryC::class, 'create'])->name('create');
    Route::post('/store', [CategoryC::class, 'store'])->name('store');
    Route::post('/{category}/update', [CategoryC::class, 'update'])->name('update');
    Route::delete('/{category}', [CategoryC::class, 'destroy'])->name('destroy');
});

// Medicine
Route::prefix('medicine')->name('medicine.')->group(function () {
    Route::get('/', [MedicineC::class, 'index'])->name('table');
    Route::get('/create', [MedicineC::class, 'create'])->name('create');
    Route::post('/store', [MedicineC::class, 'store'])->name('store');
    Route::post('/{medicine}/update', [MedicineC::class, 'update'])->name('update');
    Route::delete('/{medicine}', [MedicineC::class, 'destroy'])->name('destroy');
});

// Transaction
Route::prefix('transactions')->name('transactions.')->group(function () {
    Route::get('/', [TransactionsC::class, 'index'])->name('table');
    Route::get('/create', [TransactionsC::class, 'create'])->name('create');
    Route::post('/store', [TransactionsC::class, 'store'])->name('store');
});


Route::post('/resep/store', [ResepC::class, 'store'])->name('resep.store');
Route::get('/notifications', [NotificationC::class, 'index'])->name('notifications.all');
Route::put('/medicine-orders/{id}/update-status', [ResepC::class, 'updateStatus'])
    ->name('medicine-orders.update-status');
Route::post('/medicine-orders/pay/{visit_id}', [ResepC::class, 'pay'])->name('medicine-orders.pay');
