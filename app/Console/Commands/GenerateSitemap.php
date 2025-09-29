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

        $pages = [
            route('home', ['lang' => 'en']),
            route('faq', ['lang' => 'en']),
            route('about-us', ['lang' => 'en']),
            route('download', ['lang' => 'en']),
            route('game-guides', ['lang' => 'en']),
            route('how-to-play', ['lang' => 'en']),
            route('terms-and-conditions', ['lang' => 'en']),
            route('responsible-gaming', ['lang' => 'en']),
            route('privacy-policy', ['lang' => 'en']),
            route('contact-us', ['lang' => 'en']),
            route('promotions', ['lang' => 'en']),
            route('payments', ['lang' => 'en']),
            route('game', ['lang' => 'en']),
            route('slot', ['lang' => 'en']),
            route('live-casino', ['lang' => 'en']),
            route('table-games', ['lang' => 'en']),
            route('jackpot', ['lang' => 'en']),
            route('blog', ['lang' => 'en']),
        ];

        foreach ($pages as $url) {
            $sitemap->add(
                Url::create($url)
                    ->setPriority($url === route('home', ['lang' => 'en']) ? 1.0 : 0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            );
        }

        // Blog detail pages (no lang)
        Blog::query()
            ->where('status', true)
            ->whereNotNull('slug')
            ->where('slug', '!=', '')
            ->orderByDesc('id')
            ->chunk(200, function ($blogs) use ($sitemap) {
                foreach ($blogs as $blog) {
                    $sitemap->add(
                        Url::create(route('blog.show', ['lang' => 'en', 'slug' => $blog->slug]))
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
