<?php
namespace App\Repositories\PendingStyle;

use App\Repositories\RepositoryInterface;

interface PendingStyleRepositoryInterface extends RepositoryInterface
{
    // vi du
    public function getPendingStyle();
}