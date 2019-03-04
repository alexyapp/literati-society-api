<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Get article.
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    /**
     * Get author.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
