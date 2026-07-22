<?php

namespace App;

use App\Models\Enterprise;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class EnterpriseRepository implements EnterpriseRepositoryInterface
{
    public function all(array $filters = []): LengthAwarePaginator
    {
        $query = Enterprise::query();

        if (!empty($filters['search'])) {
            $query->where('name', 'like', '%' . $filters['search'] . '%')
                  ->orWhere('email', 'like', '%' . $filters['search'] . '%');
        }

        return $query->latest()->paginate(10);
    }

    public function find(int $id): Enterprise
    {
        return Enterprise::findOrFail($id);
    }

    public function create(array $data): Enterprise
    {
        return Enterprise::create($data);
    }

    public function update(Enterprise $enterprise, array $data): bool
    {
        return $enterprise->update($data);
    }

    public function delete(Enterprise $enterprise): bool
    {
        return $enterprise->delete();
    }

    public function restore(int $id): bool
    {
        return Enterprise::withTrashed()
            ->findOrFail($id)
            ->restore();
    }
}