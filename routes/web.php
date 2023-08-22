<?php

use App\Helpers\UploadHelper;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestingController;
use App\Mail\ContactFormSubmitted;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    return view('pages.home');
})->name('home');
Route::get('/success', function () {
    return view('pages.success');
})->name('success');
Route::get('/test-home', function () {
    return view('test.test_home');
});
Route::get('/tools/sellers_net_sheet', function (){
    return view('pages.client_net_sheet');
})->name('sellers_net_sheet');
//Route::get('/test', [\App\Http\Controllers\SellerNetsheet::class, 'index']);
Route::get('/fee', [\App\Http\Controllers\SellerNetsheet::class, 'getTitlePremium']);
Route::get('/printSellerNetSheet/{id}', [\App\Http\Controllers\SellerNetsheet::class, 'printSellerNetSheet']);
Route::post('/calculateFees', [\App\Http\Controllers\SellerNetsheet::class, 'calculateFees']);
Route::post('/saveSellersNetSheet', [\App\Http\Controllers\SellerNetsheet::class, 'saveSellersNetSheet']);
Route::post('/updateSellersNetSheet', [\App\Http\Controllers\SellerNetsheet::class, 'updateSellersNetSheet']);
Route::get('/calculateFees', [\App\Http\Controllers\SellerNetsheet::class, 'calculateFees']);


Route::get('seller-net-sheet', [\App\Http\Controllers\SellerNetsheet::class, 'index']);
Route::get('order_title_work',[PagesController::class, 'order_title_work'])->name('order_title_work');
Route::get('services',[PagesController::class, 'services'])->name('services');
Route::get('location', [PagesController::class, 'location'])->name('location');
Route::get('contact', [PagesController::class,'contact'])->name('contact');
Route::get('success', [PagesController::class,'success'])->name('success');

Route::match(['get', 'post'],'contact_form_submit', [PagesController::class, 'contactFormSubmitted']);
Route::match(['get', 'post'],'title_request_submit', [PagesController::class, 'titleRequestFormSubmitted'])->name('order_title_work_submit');

Route::get('/mail', [PagesController::class, 'mailable']);



Route::get('dump_database', [TestingController::class,'dumpDatabase']);


Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard',[PagesController::class,'userDashboard']);
});
require __DIR__.'/auth.php';

Route::get('/admin/dashboard', [AdminController::class, 'getDashboard']);

Route::get('/csv', [\App\Http\Controllers\TestingController::class, 'uploadCSV']);

Route::get('/test', function () {
    $prior_year_tax = 3000;
    $closing_date = '2023/11/11';

    $dailyTax = number_format($prior_year_tax / 365, 2);
    $dt = Carbon::parse($closing_date);
    $first_tax = Carbon::parse($dt->format('Y') . '/05/10');
    $second_tax = Carbon::parse($dt->format('Y') . '/11/10');
    $prior_year_taxes = 0;
    if ($dt->gt($first_tax)){
        if($dt->gt($second_tax)){
            $prior_year_taxes = ($dt->dayOfYear * $dailyTax) + $prior_year_tax;
        }else{
            $prior_year_taxes = ($prior_year_tax / 2) + ($dt->dayOfYear * $dailyTax);
        }

    }else{
        $prior_year_taxes =  ($dt->dayOfYear * $dailyTax) + $prior_year_tax;
    }

    dd($prior_year_taxes);
});
