<?php

use App\Livewire\AboutLivewire;
use App\Livewire\BlogLivewire;
use App\Livewire\BlogViewLivewire;
use App\Livewire\ContactLivewire;
use App\Livewire\FaqLivewire;
use App\Livewire\GameLivewire;
use App\Livewire\HomeLivewire;
use App\Livewire\HowToDownloadLivewire;
use App\Livewire\HowToGuideLivewire;
use App\Livewire\HowToWinLivewire;
use App\Livewire\JackpotLivewire;
use App\Livewire\LiveCasinoLivewire;
use App\Livewire\PaymentLivewire;
use App\Livewire\PrivacyLivewire;
use App\Livewire\PromotionLivewire;
use App\Livewire\ResponsibleGamingLivewire;
use App\Livewire\SlotLivewire;
use App\Livewire\TableGameLivewire;
use App\Livewire\TermLivewire;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeLivewire::class)->name('home');

Route::redirect('/', '/en');
Route::middleware([\App\Http\Middleware\Language::class])
    ->prefix('{lang}')
    ->where(['lang' => 'en|bm|zh'])
    ->group(function () {
        Route::get('/', HomeLivewire::class)->name('home');
        Route::get('/about-us', AboutLivewire::class)->name('about-us');
        Route::get('/terms-and-conditions', TermLivewire::class)->name('terms-and-conditions');
        Route::get('/privacy-policy', PrivacyLivewire::class)->name('privacy-policy');
        Route::get('/faq', FaqLivewire::class)->name('faq');
        Route::get('/responsible-gaming', ResponsibleGamingLivewire::class)->name('responsible-gaming');
        Route::get('/contact-us', ContactLivewire::class)->name('contact-us');
        Route::get('/promotions', PromotionLivewire::class)->name('promotions');
        Route::get('/payments', PaymentLivewire::class)->name('payments');
        Route::prefix('games')->group(function () {
            Route::get('/', GameLivewire::class)->name('game');
            Route::get('/slots', SlotLivewire::class)->name('slot');
            Route::get('/live-casino', LiveCasinoLivewire::class)->name('live-casino');
            Route::get('/table-games', TableGameLivewire::class)->name('table-games');
            Route::get('/jackpot', JackpotLivewire::class)->name('jackpot');
        });
        Route::get('/blog', BlogLivewire::class)->name('blog');
        Route::get('/blog-view', BlogViewLivewire::class)->name('blog-view');
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
