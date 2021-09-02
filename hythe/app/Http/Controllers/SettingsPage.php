<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsPage extends Controller
{
    public function settings()
    {
        Route::get('/settings', function () {
            return view('settings');
        })->middleware(['auth'])->name('settings');
    }
}
