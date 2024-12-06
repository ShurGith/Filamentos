<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ConferenceSignUpPage;

Route::get('/', function () {
   return view('welcome');
})->name('home');
Route::get('/conference-signup', ConferenceSignUpPage::class)->name('conference-signup');
