<?php
namespace App\Repositories\Species;

use App\Repositories\RepositoryInterface;

interface SpeciesRepositoryInterface extends RepositoryInterface
{
    // vi du
    public function getSpecies();
}