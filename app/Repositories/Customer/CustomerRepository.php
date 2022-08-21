<?php
namespace App\Repositories\Customer;

use App\Repositories\BaseRepository;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Customer::class;
    }

    public function getCustomer()
    {
        // return $this->model->select('product_name')->take(5)->get();
    }
}