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
            route('home'),
            route('faq'),
            route('about-us'),
            route('download'),
            route('game-guides'),
            route('how-to-play'),
            route('terms-and-conditions'),
            route('responsible-gaming'),
            route('privacy-policy'),
            route('contact-us'),
            route('promotions'),
            route('payments'),
            route('game'),
            route('slot'),
            route('live-casino'),
            route('table-games'),
            route('jackpot'),
            route('blog'),
        ];

        foreach ($pages as $url) {
            $sitemap->add(
                Url::create($url)
                    ->setPriority($url === route('home') ? 1.0 : 0.8)
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
                        Url::create(route('blog.show', ['slug' => $blog->slug]))
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
