<?php

namespace App\Repositories;

use App\Contracts\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function __construct(
        private Category $model
    ){}

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data): Category
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id): Category
    {
        $category = $this->model->find($id);
        $category->update($data);
        return $category;
    }

    public function delete($id): bool
    {
        return $this->model->destroy($id);
    }

    public function find($id): Category
    {
        return $this->model->find($id);
    }

    public function findBy($field, $value): Category
    {
        return $this->model->where($field, $value)->first();
    }

}

