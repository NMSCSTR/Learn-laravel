<?php
use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note', [NoteController::class, 'create'])->name('note.create');
