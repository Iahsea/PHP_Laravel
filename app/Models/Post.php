<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // Đếm số lượt like
    public function likeCount()
    {
        return $this->likes()->count();
    }

    // Kiểm tra nếu user đã like bài viết hay chưa
    public function isLikedByUser()
    {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    
}
