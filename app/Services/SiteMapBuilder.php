<?php

namespace App\Services;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

class SiteMapBuilder
{
    /**
     * Create a new class SiteMapBuilder.
     */
    public static function siteMapBuilder()
    {
        try {
            Artisan::call('app:generate-sitemap');
        } catch (\Throwable $e) {
            Log::error('Sitemap regeneration failed: '.$e->getMessage(), ['exception' => $e]);
        }
    }
}
