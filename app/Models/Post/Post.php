<?php

declare(strict_types=1);

namespace App\Models\Post;

class Post
{
    public static function getAll()
    {
        return require_once '../app/Models/posts-data.php';
    }
}
