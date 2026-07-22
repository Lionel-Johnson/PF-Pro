<?php

namespace Domains\Enterprise\Repositories;

use Domains\Enterprise\Models\Enterprise;

class EnterpriseRepository implements EnterpriseRepositoryInterface
{
    public function paginate()
    {
        return Enterprise::latest()->paginate(15);
    }

    public function create(array $data)
    {
        return Enterprise::create($data);
    }

    public function update(int $id,array $data)
    {
        return $this->find($id)->update($data);
    }

    public function delete(int $id)
    {
        return $this->find($id)->delete();
    }

    public function find(int $id)
    {
        return Enterprise::findOrFail($id);
    }
}