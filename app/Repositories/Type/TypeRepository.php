<?php
namespace App\Repositories\Type;

use App\Repositories\BaseRepository;

class TypeRepository extends BaseRepository implements TypeRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Type::class;
    }

    public function getType()
    {
        // return $this->model->select('product_name')->take(5)->get();
    }
}