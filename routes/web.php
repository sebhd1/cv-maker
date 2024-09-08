<?php

    use App\Http\Controllers\ResumeController;
    use App\Livewire\ResumeCreator;
    use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

    Route::group([
        'prefix' => 'resume',
        'as' => 'resume.',
    ], function () {
        Route::get('create', ResumeCreator::class)
            ->name('create');

        Route::get('preview', [ ResumeController::class, 'preview' ])
            ->name('preview');
    });

    Route::view('profile', 'profile')
        ->name('profile');
});

require __DIR__.'/auth.php';
