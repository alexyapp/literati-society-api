<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Get all comments.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get author.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
