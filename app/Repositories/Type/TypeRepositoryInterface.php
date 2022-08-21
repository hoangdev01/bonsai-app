<?php
namespace App\Repositories\Type;

use App\Repositories\RepositoryInterface;

interface TypeRepositoryInterface extends RepositoryInterface
{
    // vi du
    public function getType();
}