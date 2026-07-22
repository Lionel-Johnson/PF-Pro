<?php

namespace App;

use App\Models\Enterprise;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface EnterpriseRepositoryInterface
{
    public function all(array $filters = []): LengthAwarePaginator;

    public function find(int $id): Enterprise;

    public function create(array $data): Enterprise;

    public function update(Enterprise $enterprise, array $data): bool;

    public function delete(Enterprise $enterprise): bool;

    public function restore(int $id): bool;
}