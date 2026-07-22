<?php

namespace App\Repositories\Eloquent;

use App\Models\Service;
use App\Repositories\Contracts\ServiceRepositoryInterface;

class ServiceRepository implements ServiceRepositoryInterface
{
    public function all()
    {
        return Service::orderBy('position')->get();
    }

    public function active()
    {
        return Service::where('is_active',true)
            ->orderBy('position')
            ->get();
    }

    public function paginate(int $perPage = 10)
    {
        return Service::orderBy('position')
            ->paginate($perPage);
    }

    public function find(Service $service)
    {
        return $service;
    }

    public function create(array $data)
    {
        return Service::create($data);
    }

    public function update(Service $service,array $data)
    {
        $service->update($data);

        return $service;
    }

    public function delete(Service $service)
    {
        return $service->delete();
    }
}