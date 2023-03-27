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
use App\Http\Controllers\StudentController;
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

Route::get('user', function () {
   return view('pages.users.user');
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

//////
Route::post('home', [LoginController::class, 'home'])->name('home.index');
Route::get('housingInfo', [HousingInfoController::class, 'index'])->name('housingInfo.index');
Route::get('finance', [FinanceController::class, 'index'])->name('finance.index');
Route::get('deanship', [DeanshipController::class, 'index'])->name('deanship.index');
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
Route::delete('housingA/{id}/destroy', [HousingAController::class, 'destroy'])->name('HousingA.destroy');

//NewDorms_bRoutes
Route::get('housingB', [HousingBController::class, 'index'])->name('HousingB.index');
Route::get('housingB/create', [HousingBController::class, 'create'])->name('HousingB.create');
Route::post('housingB/store', [HousingBController::class, 'store'])->name('HousingB.store');
Route::get('housingB/{id}/edit', [HousingBController::class, 'edit'])->name('HousingB.edit');
Route::put('housingB/{id}/update', [HousingBController::class, 'update'])->name('HousingB.update');
Route::delete('housingB/{id}/destroy', [HousingBController::class, 'destroy'])->name('HousingB.destroy');

//NewDorms_hidab Routes
Route::get('hidab', [HousingHidabController::class, 'index'])->name('Hidab.index');
Route::get('hidab/create', [HousingHidabController::class, 'create'])->name('Hidab.create');
Route::post('hidab/store', [HousingHidabController::class, 'store'])->name('Hidab.store');
Route::get('hidab/{id}/edit', [HousingHidabController::class, 'edit'])->name('Hidab.edit');
Route::put('hidab/{id}/update', [HousingHidabController::class, 'update'])->name('Hidab.update');
Route::delete('hidab/{id}/destroy', [HousingHidabController::class, 'destroy'])->name('Hidab.destroy');


//NewDorms_hidab Routes
Route::get('info', [HousingInfoController::class, 'index'])->name('info.index');
Route::get('info/create', [HousingInfoController::class, 'create'])->name('info.create');
Route::get('info/{id}/edit', [HousingInfoController::class, 'edit'])->name('info.edit');
Route::put('info/{id}/update', [HousingInfoController::class, 'update'])->name('info.update');
Route::delete('info/{id}/destroy', [HousingInfoController::class, 'destroy'])->name('info.destroy');
Route::get('/superAdminHome',[HousingInfoController::class,'show'])->name('Home.superAdmin');



Route::post('student/store', [StudentController::class, 'store'])->name('student.store');
Route::put('student/{id}/update', [StudentController::class, 'update'])->name('student.update');
Route::delete('student/{id}/destroy', [StudentController::class, 'destroy'])->name('student.destroy');