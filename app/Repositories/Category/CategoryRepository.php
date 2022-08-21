<?php
namespace App\Repositories\Category;

use App\Repositories\BaseRepository;
use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Models\Category;

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

    public function findBySlug($slug)
    {

        $result = $this->model->where("slug", $slug)->first();

        return $result;
    }

    public function create($attributes = [])
    {
        $attributes["slug"] = SlugService::createSlug(Category::class, 'slug', $attributes["name"]);

        return $this->model->create($attributes);
    }
}