<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
<<<<<<< HEAD
use Illuminate\Support\Facades\Response;
=======
>>>>>>> 0e2196c (push predict and landing-page)

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
<<<<<<< HEAD

=======
>>>>>>> 0e2196c (push predict and landing-page)
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
Route::get('/', function () {
<<<<<<< HEAD
    return view('welcome');
=======
    return view('livewire.landing-page');
>>>>>>> 0e2196c (push predict and landing-page)
});
