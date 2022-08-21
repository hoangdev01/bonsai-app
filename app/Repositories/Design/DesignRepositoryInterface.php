<?php
namespace App\Repositories\Design;

use App\Repositories\RepositoryInterface;

interface DesignRepositoryInterface extends RepositoryInterface
{
    // vi du
    public function getDesign();
}