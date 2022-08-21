<?php
namespace App\Repositories\OrderDetail;

use App\Repositories\BaseRepository;

class OrderDetailRepository extends BaseRepository implements OrderDetailRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\OrderDetail::class;
    }

    public function getOrderDetail()
    {
        // return $this->model->select('product_name')->take(5)->get();
    }
}