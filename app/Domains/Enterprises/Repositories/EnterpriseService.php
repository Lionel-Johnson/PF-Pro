<?php

namespace Domains\Enterprise\Services;

use Domains\Enterprise\Repositories\EnterpriseRepositoryInterface;

class EnterpriseService
{
    public function __construct(
        protected EnterpriseRepositoryInterface $repository
    ) {
    }

    public function paginate()
    {
        return $this->repository->paginate();
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(int $id,array $data)
    {
        return $this->repository->update($id,$data);
    }

    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }
}