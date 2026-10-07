<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Photo extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'image_path'];

    protected $hidden = [];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [];
    }

    public function toggleLike(int $userId): void
    {
        $like = $this->likes()
            ->where('user_id', $userId)
            ->first();

        if ($like) {
            $like->delete();
        } else {
            $this->likes()->create([
                'user_id' => $userId,
            ]);
        }
    }

    public function countLikes()
    {
        return $this->likes()->count();
    }

    public function isLikedBy(int $userId): bool
    {
        return $this->likes()
            ->where('user_id', $userId)
            ->exists();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }
}
