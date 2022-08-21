<?php
namespace App\Repositories\Image;

use App\Repositories\BaseRepository;

class ImageRepository extends BaseRepository implements ImageRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Image::class;
    }

    public function getImage()
    {
        // return $this->model->select('product_name')->take(5)->get();
    }
}