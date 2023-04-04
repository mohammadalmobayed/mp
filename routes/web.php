<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DeanshipController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HousingAController;
use App\Http\Controllers\HousingBController;
use App\Http\Controllers\HousingHidabController;
use App\Http\Controllers\HousingInfoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PunishmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UserController;
use App\Models\Deanship;
// use App\Models\Finance;
use Illuminate\Support\Facades\Auth;
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
    return view('landing');
});


Auth::routes();
//User route
Route::middleware(['auth','user-role:user'])->group(function()
{
   Route::get("/home",[HomeController::class,'userHome'])->name('home');
});
//editor route
Route::middleware(['auth','user-role:editor'])->group(function()
{
   Route::get("/editorHome",[HomeController::class,'editorHome'])->name('Home.editor');
});
//admin route
Route::middleware(['auth','user-role:admin'])->group(function()
{
   Route::get("/adminHome",[HomeController::class,'adminHome'])->name('Home.admin');
});
//superAdmin route
Route::middleware(['auth','user-role:superAdmin'])->group(function()
{
   Route::get("/superAdminHome",[HomeController::class,'superAdminHome'])->name('Home.superAdmin');
});





//NewUsersRoutes:
Route::get('users', [UserController::class, 'index'])->name('user.index');
Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::post('user/store', [UserController::class, 'store'])->name('user.store');
Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::delete('user/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
///////////

//////DeanShip
Route::get('deanship', [DeanshipController::class, 'index'])->name('deanship.index');


/// FinanceRoutes//
Route::get('finance', [FinanceController::class, 'index'])->name('finance.index');
Route::get('finance/{id}', [FinanceController::class, 'show'])->name('finance.show');


///ProfileRoute//
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('profile/{id}/update', [ProfileController::class, 'update'])->name('profile.update');
Route::post('profile/store', [ProfileController::class, 'store'])->name('profile.store');

/////
//NewDorms_aRoutes
Route::get('housingA', [HousingAController::class, 'index'])->name('housingA.index');
Route::get('housingA/create', [HousingAController::class, 'create'])->name('housingA.create');
Route::post('housingA/store', [HousingAController::class, 'store'])->name('HousingA.store');
Route::get('housingA/{id}/edit', [HousingAController::class, 'edit'])->name('HousingA.edit');
Route::put('housingA/{id}/update', [HousingAController::class, 'update'])->name('HousingA.update');
Route::get('housingA/{id}', [HousingAController::class, 'show'])->name('HousingA.show');
Route::delete('housingA/{student_id}/destroy', [HousingAController::class, 'destroy'])->name('HousingA.destroy');

//NewDorms_bRoutes
Route::get('housingB', [HousingBController::class, 'index'])->name('HousingB.index');
Route::get('housingB/create', [HousingBController::class, 'create'])->name('HousingB.create');
Route::post('housingB/store', [HousingBController::class, 'store'])->name('HousingB.store');
Route::get('housingB/{id}/edit', [HousingBController::class, 'edit'])->name('HousingB.edit');
Route::put('housingB/{id}/update', [HousingBController::class, 'update'])->name('HousingB.update');
Route::delete('housingB/{student_id}/destroy', [HousingBController::class, 'destroy'])->name('HousingB.destroy');

//NewDorms_hidab Routes
Route::get('hidab', [HousingHidabController::class, 'index'])->name('Hidab.index');
Route::get('hidab/create', [HousingHidabController::class, 'create'])->name('Hidab.create');
Route::post('hidab/store', [HousingHidabController::class, 'store'])->name('Hidab.store');
Route::get('hidab/{id}/edit', [HousingHidabController::class, 'edit'])->name('Hidab.edit');
Route::put('hidab/{id}/update', [HousingHidabController::class, 'update'])->name('Hidab.update');
Route::delete('hidab/{student_id}/destroy', [HousingHidabController::class, 'destroy'])->name('Hidab.destroy');


//NewDormsInfo Routes
Route::get('info', [HousingInfoController::class, 'index'])->name('housingInfo.index');
Route::get('info/create', [HousingInfoController::class, 'create'])->name('info.create');
Route::get('info/{id}/edit', [HousingInfoController::class, 'edit'])->name('info.edit');
Route::put('info/{id}/update', [HousingInfoController::class, 'update'])->name('info.update');
Route::delete('info/{id}/destroy',[HousingInfoController::class, 'destroy'])->name('info.destroy');
Route::get('/superAdminHome',[HousingInfoController::class,'show'])->name('Home.superAdmin');

//PunishmentRouts//
Route::get('punishment', [PunishmentController::class, 'index'])->name('punishment.index');
Route::post('punishment',[PunishmentController::class,'store'])->name('punishment.store');
Route::get('punishment/{id}/single',[PunishmentController::class,'show'])->name('punishment.show');
Route::put('punishment/{id}/edit',[PunishmentController::class,'edit'])->name('punishment.edit');

