<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
        Route::prefix('quiz')->group(function () {
            Route::get('daftar-quiz', [QuizController::class, 'index'])->name('admin.quiz.daftar_quiz.index');
            Route::get('daftar-quiz/create', [QuizController::class, 'create'])->name('admin.quiz.daftar_quiz.create');
            Route::post('daftar-quiz', [QuizController::class, 'store'])->name('admin.quiz.daftar_quiz.store');
            Route::get('daftar-quiz/{quiz}', [QuizController::class, 'show'])->name('admin.quiz.daftar_quiz.show');
            Route::get('daftar-quiz/{quiz}/edit', [QuizController::class, 'edit'])->name('admin.quiz.daftar_quiz.edit');
            Route::put('daftar-quiz/{quiz}', [QuizController::class, 'update'])->name('admin.quiz.daftar_quiz.update');
            Route::delete('daftar-quiz/{quiz}', [QuizController::class, 'destroy'])->name('admin.quiz.daftar_quiz.destroy');

            Route::get('daftar-pertanyaan', [QuestionController::class, 'index'])->name('admin.quiz.question.index');
            Route::get('daftar-pertanyaan/create', [QuestionController::class, 'create'])->name('admin.quiz.question.create');
            Route::post('daftar-pertanyaan', [QuestionController::class, 'store'])->name('admin.quiz.question.store');
            Route::get('daftar-pertanyaan/{question}', [QuestionController::class, 'show'])->name('admin.quiz.question.show');
            Route::get('daftar-pertanyaan/{question}/edit', [QuestionController::class, 'edit'])->name('admin.quiz.question.edit');
            Route::put('daftar-pertanyaan/{question}', [QuestionController::class, 'update'])->name('admin.quiz.question.update');
            Route::delete('daftar-pertanyaan/{question}', [QuestionController::class, 'destroy'])->name('admin.quiz.question.destroy');
        });
});

require __DIR__.'/auth.php';
