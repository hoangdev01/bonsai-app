<?php
namespace App\Repositories\Tree;

use App\Repositories\BaseRepository;

class TreeRepository extends BaseRepository implements TreeRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Tree::class;
    }

    public function getTree()
    {
        // return $this->model->select('product_name')->take(5)->get();
    }
}