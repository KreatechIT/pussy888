<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Blog;

class GenerateSitemap extends Command
{
    protected $signature = 'app:generate-sitemap';
    protected $description = 'Generate public/sitemap.xml with static pages and blog posts (no lang prefix)';

    public function handle(): int
    {
        $this->info('Generating sitemap...');

        $sitemap = Sitemap::create();

        $base = rtrim(config('app.url'), '/');

        $pages = [
            $base . '/',
            $base . '/faq',
            $base . '/about-us',
            $base . '/download',
            $base . '/game-guides',
            $base . '/how-to-play',
            $base . '/terms-and-conditions',
            $base . '/responsible-gaming',
            $base . '/privacy-policy',
            $base . '/contact-us',
            $base . '/promotions',
            $base . '/payments',
            $base . '/games',
            $base . '/games/slots',
            $base . '/games/live-casino',
            $base . '/games/table-games',
            $base . '/games/jackpot',
            $base . '/blog',
        ];

        foreach ($pages as $url) {
            $sitemap->add(
                Url::create($url)
                    ->setPriority($url === $base . '/' ? 1.0 : 0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            );
        }

        // Blog detail pages (no lang)
        Blog::query()
            ->where('status', true)
            ->whereNotNull('slug')
            ->where('slug', '!=', '')
            ->orderByDesc('id')
            ->chunk(200, function ($blogs) use ($sitemap, $base) {
                foreach ($blogs as $blog) {
                    $sitemap->add(
                        Url::create($base . '/blog/' . $blog->slug)
                            ->setLastModificationDate($blog->updated_at ?? $blog->created_at)
                            ->setPriority(0.8)
                            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    );
                }
            });

        // Save to public/sitemap.xml
        $path = public_path('sitemap.xml');
        $sitemap->writeToFile($path);

        $this->info("✅ sitemap.xml saved at: {$path}");

        return self::SUCCESS;
    }
}
