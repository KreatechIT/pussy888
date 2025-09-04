<?php

use App\Livewire\HomeLivewire;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeLivewire::class)->name('home');


Route::redirect('/', '/en');
Route::middleware([\App\Http\Middleware\Language::class])
    ->prefix('{lang}')
    ->where(['lang' => 'en|bm|zh'])
    ->group(function () {
        Route::get('/', HomeLivewire::class)->name('home');
        
        Route::get('/foo', function () {
            Artisan::call('storage:link');
        });
    });

// Catch-all redirect for routes without a valid language prefix
Route::get('{path}', function ($path) {
    // Avoid redirecting admin routes
    if (str_starts_with($path, 'admin')) {
        return app()->handle(\Illuminate\Http\Request::create('/'.$path));
    }

    return redirect('/en/'.$path);
})->where('path', '^(?!en|bm|zh).*$');
