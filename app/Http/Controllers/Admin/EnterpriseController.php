<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnterpriseRequest;
use App\Models\Enterprise;
use App\Services\EnterpriseService;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    public function __construct(
        protected EnterpriseService $service
    ) {
    }

    public function index(Request $request)
    {
        $enterprises = $this->service->list(
            $request->only('search')
        );

        return view('admin.enterprises.index', compact('enterprises'));
    }

    public function create()
    {
        return view('admin.enterprises.create');
    }

    public function store(EnterpriseRequest $request)
    {
        $this->service->create(
            $request->validated()
        );

        return redirect()
            ->route('enterprises.index')
            ->with('success', 'Entreprise créée avec succès.');
    }

    public function show(Enterprise $enterprise)
    {
        return view('admin.enterprises.show', compact('enterprise'));
    }

    public function edit(Enterprise $enterprise)
    {
        return view('admin.enterprises.edit', compact('enterprise'));
    }

    public function update(
        EnterpriseRequest $request,
        Enterprise $enterprise
    ) {
        $this->service->update(
            $enterprise,
            $request->validated()
        );

        return redirect()
            ->route('enterprises.index')
            ->with('success', 'Entreprise mise à jour.');
    }

    public function destroy(Enterprise $enterprise)
    {
        $this->service->delete($enterprise);

        return redirect()
            ->route('enterprises.index')
            ->with('success', 'Entreprise supprimée.');
    }

    public function restore($id)
    {
        $this->service->restore($id);

        return redirect()
            ->route('enterprises.index')
            ->with('success', 'Entreprise restaurée.');
    }
}