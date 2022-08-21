<?php
namespace App\Repositories\OrderDetail;

use App\Repositories\RepositoryInterface;

interface OrderDetailRepositoryInterface extends RepositoryInterface
{
    // vi du
    public function getOrderDetail();
}