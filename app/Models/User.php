<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get all articles.
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    /**
     * Get all comments.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * 
     */
    public function getDisplayNameAttribute()
    {
        return $this->use_pen_name ? $this->username
                                   : (
                                       $this->name ?? null
                                   );
    }

    /**
     * Get all identities.
     */
    public function identities()
    {
        return $this->hasMany(SocialIdentity::class);
    }
}
