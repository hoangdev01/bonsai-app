<?php
namespace App\Repositories\Design;

use App\Repositories\BaseRepository;

class DesignRepository extends BaseRepository implements DesignRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Design::class;
    }

    public function getDesign()
    {
        // return $this->model->select('product_name')->take(5)->get();
    }
}