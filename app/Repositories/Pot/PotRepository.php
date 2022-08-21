<?php
namespace App\Repositories\Pot;

use App\Repositories\BaseRepository;

class PotRepository extends BaseRepository implements PotRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Pot::class;
    }

    public function getPot()
    {
        // return $this->model->select('product_name')->take(5)->get();
    }
}