<?php

namespace App\Services;

use App\EnterpriseRepositoryInterface;
use App\Models\Enterprise;

class EnterpriseService
{
    public function __construct(
        protected EnterpriseRepositoryInterface $repository
    ) {
    }

    public function list(array $filters = [])
    {
        return $this->repository->all($filters);
    }

    public function find(int $id): Enterprise
    {
        return $this->repository->find($id);
    }

    public function create(array $data): Enterprise
    {
        $data['slug'] = $this->generateSlug($data['name']);

        return $this->repository->create($data);
    }

    public function update(Enterprise $enterprise, array $data): bool
    {
        if (isset($data['name'])) {
            $data['slug'] = $this->generateSlug($data['name']);
        }

        return $this->repository->update($enterprise, $data);
    }

    public function delete(Enterprise $enterprise): bool
    {
        return $this->repository->delete($enterprise);
    }

    public function restore(int $id): bool
    {
        return $this->repository->restore($id);
    }

    private function generateSlug(string $name): string
    {
        return str()->slug($name);
    }
}