<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/quiz/create/{slug?}', [QuizController::class, 'create'])->name('quiz.create');

    Route::get('/quiz/{slug}', [QuizController::class, 'show'])->name('quiz.show');
    Route::post('/quiz/answer', [QuizController::class, 'answer'])->name('quiz.answer');
    Route::get('/quiz/result/{slug}', [QuizController::class, 'result'])->name('quiz.result');




    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');




require __DIR__.'/auth.php';
