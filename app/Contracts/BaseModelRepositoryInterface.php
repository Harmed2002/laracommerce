<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;

interface BaseModelRepositoryInterface
{
    public function all();

    public function create(array $data): Model;

    public function update(array $data, $id): Model;

    public function delete($id): bool;

    public function find($id): Model;

    public function findBy($field, $value): Model;

}
