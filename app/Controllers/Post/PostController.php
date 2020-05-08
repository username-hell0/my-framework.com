<?php

declare(strict_types=1);

namespace App\Controllers\Post;

use Core\Controller\Controller;

/**
 * Class PostController
 * @package App\Controllers\Post
 */
class PostController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->view->setTitle('Posts');
        $this->view->setTemplate('layout');
    }

    public function list()
    {
        $this->render('posts/posts-list');
    }
}
