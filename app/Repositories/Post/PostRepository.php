<?php
namespace App\Repositories\Post;

use App\Repositories\BaseRepository;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Post::class;
    }

    public function getPost()
    {
        // return $this->model->select('product_name')->take(5)->get();
    }
}