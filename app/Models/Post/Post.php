<?php

declare(strict_types=1);

namespace App\Models\Post;

use Core\Database\Database;

class Post
{
    public static function getAll()
    {
        $dataBase = Database::getInstance();

        return $dataBase->query("SELECT * FROM `post`");
    }
}
