<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        return $this->image ? 'images/'.$this->image : null;
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

}
