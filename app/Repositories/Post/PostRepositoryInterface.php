<?php
namespace App\Repositories\Post;

use App\Repositories\RepositoryInterface;

interface PostRepositoryInterface extends RepositoryInterface
{
    // vi du
    public function getPost();
}