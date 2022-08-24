<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use Cviebrock\EloquentSluggable\Services\SlugService;

abstract class BaseRepository implements RepositoryInterface
{
    //model muốn tương tác
    protected $model;

   //khởi tạo
    public function __construct()
    {
        $this->setModel();
    }

    //lấy model tương ứng
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        $result = $this->model->find($id);

        return $result;
    }

    public function create($attributes = [])
    {
        return $this->model->create($attributes);
    }

    public function update($id, $attributes = [])
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }

        return false;
    }

    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }

    public function findBySlug($slug)
    {

        $result = $this->model->where("slug", $slug)->first();

        return $result;
    }

    public function createWithSlug($attributes = [])
    {
        $attributes["slug"] = SlugService::createSlug($this->model, 'slug', $attributes["name"]);

        return $this->model->create($attributes);
    }

    public function updateBySlug($slug, $attributes = [])
    {
        $result = $this->model->where("slug", $slug)->first();
        if ($result) {
            $result->update($attributes);
            return $result;
        }

        return false;
    }

    public function deleteBySlug($slug)
    {
        $result = $this->model->where("slug", $slug)->first();
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }
}