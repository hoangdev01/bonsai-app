<?php
namespace App\Repositories\PendingStyle;

use App\Repositories\BaseRepository;

class PendingStyleRepository extends BaseRepository implements PendingStyleRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\PendingStyle::class;
    }

    public function getPendingStyle()
    {
        // return $this->model->select('product_name')->take(5)->get();
    }
}