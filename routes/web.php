<?php

use App\Livewire\AboutLivewire;
use App\Livewire\BlogLivewire;
use App\Livewire\BlogViewLivewire;
use App\Livewire\ContactLivewire;
use App\Livewire\DownloadLivewire;
use App\Livewire\FaqLivewire;
use App\Livewire\GameGuidesLivewire;
use App\Livewire\GameLivewire;
use App\Livewire\HomeLivewire;
use App\Livewire\HowToPlayLivewire;
use App\Livewire\JackpotLivewire;
use App\Livewire\LiveCasinoLivewire;
use App\Livewire\PaymentLivewire;
use App\Livewire\PrivacyLivewire;
use App\Livewire\PromotionLivewire;
use App\Livewire\ResponsibleGamingLivewire;
use App\Livewire\SlotLivewire;
use App\Livewire\TableGameLivewire;
use App\Livewire\TermLivewire;
use App\Services\SiteMapBuilder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeLivewire::class)->name('home');

Route::redirect('/', '/en');
Route::middleware([\App\Http\Middleware\Language::class])
    ->prefix('{lang}')
    ->where(['lang' => 'en|bm|zh'])
    ->group(function () {
        Route::get('/', HomeLivewire::class)->name('home');
        Route::get('/faq', FaqLivewire::class)->name('faq');
        Route::get('/about-us', AboutLivewire::class)->name('about-us');
        Route::get('/download', DownloadLivewire::class)->name('download');
        Route::get('/game-guides', GameGuidesLivewire::class)->name('game-guides');
        Route::get('/how-to-play', HowToPlayLivewire::class)->name('how-to-play');
        Route::get('/terms-and-conditions', TermLivewire::class)->name('terms-and-conditions');
        Route::get('/responsible-gaming', ResponsibleGamingLivewire::class)->name('responsible-gaming');
        Route::get('/privacy-policy', PrivacyLivewire::class)->name('privacy-policy');
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
    Route::get('/generate-sitemap', function () {
        Artisan::call('app:generate-sitemap');
    });

    Route::get('/sitemap.xml', function (SiteMapBuilder $builder) {
        $path = public_path('sitemap.xml');

        if (! file_exists($path)) {
            // First request will generate it.
            $builder->writeToPublic();
        }

        return response()->file($path, [
            'Content-Type' => 'application/xml',
            // Optional cache headers:
            'Cache-Control' => 'public, max-age=3600',
        ]);
    })->name('sitemap');

// Catch-all redirect for routes without a valid language prefix
Route::get('{path}', function ($path) {
    // Avoid redirecting admin routes
    if (str_starts_with($path, 'admin')) {
        return app()->handle(\Illuminate\Http\Request::create('/'.$path));
    }

    return redirect('/en/'.$path);
})->where('path', '^(?!en|bm|zh).*$');
