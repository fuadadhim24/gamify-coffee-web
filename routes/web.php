<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

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

            Route::get('daftar-jawaban', [OptionController::class, 'index'])->name('admin.quiz.option.index');

            Route::get('daftar-jawaban/create', [OptionController::class, 'create'])->name('admin.quiz.option.create');
            Route::post('daftar-jawaban', [OptionController::class, 'store'])->name('admin.quiz.option.store');
            Route::get('daftar-jawaban/{option}', [OptionController::class, 'show'])->name('admin.quiz.option.show');
            Route::get('daftar-jawaban/{option}/edit', [OptionController::class, 'edit'])->name('admin.quiz.option.edit');
            Route::put('daftar-jawaban/{option}', [OptionController::class, 'update'])->name('admin.quiz.option.update');
            Route::delete('daftar-jawaban/{option}', [OptionController::class, 'destroy'])->name('admin.quiz.option.destroy');

            Route::get('daftar-mahasiswa', [MahasiswaController::class, 'index'])->name('admin.mahasiswa.index');

        });
});

require __DIR__.'/auth.php';
