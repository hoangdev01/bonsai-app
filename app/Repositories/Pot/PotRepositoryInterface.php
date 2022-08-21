<?php
namespace App\Repositories\Pot;

use App\Repositories\RepositoryInterface;

interface PotRepositoryInterface extends RepositoryInterface
{
    // vi du
    public function getPot();
}