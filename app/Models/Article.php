<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'slug',
        'content',
        'excerpt',
        'image_url',
        'published',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
