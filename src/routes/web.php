<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminNoAnswerController;
use App\Http\Controllers\AdminAnsweredController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\QuestionController;
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
    return view('welcome');
})->name('home');

Route::get('/faq', [FaqController::class, 'list'])->name('faq');;

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin-no-answer', [AdminNoAnswerController::class, 'list'])->name('admin.noanswer');
    Route::get('/admin-answered', [AdminAnsweredController::class, 'list'])->name('admin.answered');

    Route::post('/admin-no-answer/{id}/{route}', [QuestionController::class, 'destroy'])->name('question.delete');
    Route::post('/admin-answered/{id}/{route}', [QuestionController::class, 'destroy'])->name('question.delete');
    
    Route::post('/admin-noanswer/{id}', [AnswerController::class, 'create'])->name('answer.create');
    Route::post('/admin-noanswer', [AnswerController::class, 'store'])->name('answer.store');
    Route::post('/admin-answered/{id}', [AnswerController::class, 'edit'])->name('answer.edit');
    Route::post('/admin-answered', [AnswerController::class, 'update'])->name('answer.update');
});

Route::fallback(function () {
    return view('404');
});

require __DIR__.'/auth.php';
