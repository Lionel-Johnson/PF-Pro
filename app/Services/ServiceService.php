<?php

namespace App\Services;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Contracts\ServiceRepositoryInterface;

class ServiceService
{
    public function __construct(

        protected ServiceRepositoryInterface $repository

    ){}

    public function index()
    {
        return $this->repository->paginate();
    }

    public function store(array $data)
    {
        if(isset($data['image'])){

            $data['image']=$data['image']
                ->store('services','public');

        }

        return $this->repository->create($data);
    }

    public function update(Service $service,array $data)
    {
        if(isset($data['image'])){

            if($service->image){

                Storage::disk('public')
                    ->delete($service->image);

            }

            $data['image']=$data['image']
                ->store('services','public');

        }

        return $this->repository->update($service,$data);
    }

    public function destroy(Service $service)
    {
        if($service->image){

            Storage::disk('public')
                ->delete($service->image);

        }

        return $this->repository->delete($service);
    }
}