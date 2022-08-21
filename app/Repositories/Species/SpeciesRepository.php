<?php
namespace App\Repositories\Species;

use App\Repositories\BaseRepository;

class SpeciesRepository extends BaseRepository implements SpeciesRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Species::class;
    }

    public function getSpecies()
    {
        // return $this->model->select('product_name')->take(5)->get();
    }
}