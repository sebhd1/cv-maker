<?php

    use App\Livewire\Counter;
    use App\Livewire\ResumeCreator;
    use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('create', ResumeCreator::class)
->middleware(['auth'])
->name('create');

require __DIR__.'/auth.php';
