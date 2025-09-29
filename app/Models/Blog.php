<?php

namespace App\Models;

use App\Services\SiteMapBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Blog extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'heading',
        'author',
        'image',
        'alt',
        'content',
        'is_featured',
        'status',
        'meta_title',
        'meta_description',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'content' => 'array',
            'is_featured' => 'boolean',
            'status' => 'boolean',
        ];
    }

    public function getImageUrlAttribute()
    {
        return $this->getFirstMediaUrl('posts');
    }

    protected static function booted(): void
    {
        $regenerate = function () {
            DB::afterCommit(function () {
                SiteMapBuilder::siteMapBuilder();
            });
        };

        static::created($regenerate);
        static::updated($regenerate);
        static::deleted($regenerate);
    }

    public function scopeFeatured($query)
    {
        $query->where('is_featured', 1);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable')->latest();
    }
}
