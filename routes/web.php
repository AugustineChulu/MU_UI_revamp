<?php

use App\Http\Controllers\Accomodation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\PersonalInformation;

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

Route::get('/', function () {return view('welcome');});

Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard');
Route::get('personal-information', [PersonalInformation::class, 'index'])->name('personal-information');
Route::get('accomodation', [Accomodation::class, 'index'])->name('accomodation');
Route::view('view-ca', 'backend/view_ca')->name('view-ca');
Route::view('grades', 'backend/grades')->name('grades');
Route::view('payments', 'backend/payments')->name('payments');
Route::view('time-table', 'backend/timetable')->name('time-table');
Route::view('course-evaluation', 'backend/course_evaluation')->name('course-evaluation');
Route::view('course-registration', 'backend/course_registration')->name('course-registration');
Route::view('payment-options', 'backend/payment_options')->name('payment-options');
Route::view('print-exam-docket', 'backend/print_exam_docket')->name('print-exam-docket');