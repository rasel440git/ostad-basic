<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    static function getTotalPostsInCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }

    public static function softDeletedPosts() {
        return self::onlyTrashed()->get();
    }
}
