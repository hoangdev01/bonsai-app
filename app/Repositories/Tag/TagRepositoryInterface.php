<?php
namespace App\Repositories\Tag;

use App\Repositories\RepositoryInterface;

interface TagRepositoryInterface extends RepositoryInterface
{
    // vi du
    public function getTag();
}