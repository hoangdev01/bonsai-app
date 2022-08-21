<?php
namespace App\Repositories\Tree;

use App\Repositories\RepositoryInterface;

interface TreeRepositoryInterface extends RepositoryInterface
{
    // vi du
    public function getTree();
}