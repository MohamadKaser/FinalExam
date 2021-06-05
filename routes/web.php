<?php
use app\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('editStudent/{id}', [StudentController::class, 'editStudent'])->name('student.editstudent');

Route::get('/addstudent', [StudentController::class, 'addStudent']);

Route::post('/addstudentsubmit', [StudentController::class, 'addStudentSubmit'])->name('student.addSubmit');
