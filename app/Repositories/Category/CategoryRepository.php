<?php
namespace App\Repositories\Category;

use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Category::class;
    }

    public function getCategory()
    {
        // return $this->model->select('product_name')->take(5)->get();
    }

    public function create($attributes = [])
    {
        $attributes = array_add($attributes, "slug", SlugService::createSlug(Post::class, 'slug', $request->title));
        return $this->model->create($attributes);
    }
}