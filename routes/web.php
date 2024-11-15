<?php

use App\Livewire\WebFrontend\HomeComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route("home");
});

Route::get("/",HomeComponent::class)->name("home");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[Controller::class, 'index'])->name('dashboard');
});
