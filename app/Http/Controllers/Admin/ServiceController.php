<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Services\ServiceService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct(

        protected ServiceService $service

    ){}

    public function index()
    {
        $services=$this->service->index();

        return view(
            'admin.services.index',
            compact('services')
        );
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(StoreServiceRequest $request)
    {
        $this->service
            ->store($request->validated());

        return redirect()

            ->route('admin.services.index')

            ->with(
                'success',
                'Service créé avec succès.'
            );
    }

    public function edit(Service $service)
    {
        return view(
            'admin.services.edit',
            compact('service')
        );
    }

    public function update(
        UpdateServiceRequest $request,
        Service $service
    ){

        $this->service
            ->update(
                $service,
                $request->validated()
            );

        return redirect()

            ->route('admin.services.index')

            ->with(
                'success',
                'Service modifié.'
            );
    }

    public function destroy(Service $service)
    {
        $this->service
            ->destroy($service);

        return back()

            ->with(
                'success',
                'Service supprimé.'
            );
    }
}