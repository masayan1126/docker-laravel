<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function Likes()
    {
        return $this->hasMany('App\Like');
    }
    public function LikedBy($user)
    {
        return Like::where('user_id', $user->id)->where('post_id', $this->id);
    }

    // リレーション先の子データを削除
    public static function boot()
    {
        parent::boot();
        static::deleted(function ($post) {
            $post->likes()->delete();
        });
    }
}
