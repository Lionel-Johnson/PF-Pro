<?php
namespace Domains\Enterprises\Repositories;
interface EnterpriseRepositoryInterface
{
    public function paginate();
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
    public function find(int $id);
}
