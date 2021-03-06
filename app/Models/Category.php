<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get all articles.
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
