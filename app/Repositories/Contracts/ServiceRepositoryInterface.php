<?php

namespace App\Repositories\Contracts;

use App\Models\Service;

interface ServiceRepositoryInterface
{
    public function all();

    public function active();

    public function paginate(int $perPage = 10);

    public function find(Service $service);

    public function create(array $data);

    public function update(Service $service,array $data);

    public function delete(Service $service);
}