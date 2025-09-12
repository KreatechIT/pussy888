<?php

namespace App\Console\Commands;

use App\Models\Blog;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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
            '/',
            'faq',
            'about-us',
            'download',
            'game-guides',
            'how-to-play',
            'terms-and-conditions',
            'responsible-gaming',
            'privacy-policy',
            'contact-us',
            'promotions',
            'payments',
            'games',
            'games/slots',
            'games/live-casino',
            'games/table-games',
            'games/jackpot',
            'blog',
        ];

        foreach ($pages as $url) {
            $sitemap->add(
                Url::create($url)
                    ->setPriority($url === $base.'/' ? 1.0 : 0.8)
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
                        Url::create($base.'/blog/'.$blog->slug)
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
