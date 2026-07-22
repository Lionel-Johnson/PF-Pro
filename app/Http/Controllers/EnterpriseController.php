<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnterpriseRequest;
use App\Http\Requests\UpdateEnterpriseRequest;
use App\Models\Enterprise;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class EnterpriseController extends Controller
{
    public function index(Request $request): View
    {
        $search = trim($request->input('search'));

        $sort = $request->input('sort', 'created_at');

        $direction = $request->input('direction', 'desc');

        $allowedSorts = [
            'name',
            'slug',
            'email',
            'phone',
            'created_at',
        ];

        if (! in_array($sort, $allowedSorts, true)) {
            $sort = 'created_at';
        }

        if (! in_array($direction, ['asc', 'desc'], true)) {
            $direction = 'desc';
        }

        $enterprises = Enterprise::query()

            ->when($search, function ($query) use ($search) {

                $query->where(function ($q) use ($search) {

                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('slug', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%");

                });

            })

            ->orderBy($sort, $direction)

            ->paginate(15)

            ->withQueryString();

        return view('enterprises.index', compact(
            'enterprises',
            'search',
            'sort',
            'direction'
        ));
    }

    public function create(): View
    {
        return view('enterprises.create');
    }

    public function store(StoreEnterpriseRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['slug']);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('enterprises', 'public');
        }

        Enterprise::create($data);

        return redirect()
            ->route('enterprises.index')
            ->with('success', 'Entreprise créée avec succès.');
    }

    public function show(Enterprise $enterprise): View
    {
        return view('enterprises.show', compact('enterprise'));
    }

    public function edit(Enterprise $enterprise): View
    {
        return view('enterprises.edit', compact('enterprise'));
    }

    public function update(UpdateEnterpriseRequest $request, Enterprise $enterprise): RedirectResponse
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['slug']);

        if ($request->hasFile('logo')) {

            if (
                $enterprise->logo &&
                Storage::disk('public')->exists($enterprise->logo)
            ) {
                Storage::disk('public')->delete($enterprise->logo);
            }

            $data['logo'] = $request->file('logo')->store('enterprises', 'public');
        }

        $enterprise->update($data);

        return redirect()
            ->route('enterprises.index')
            ->with('success', 'Entreprise mise à jour avec succès.');
    }

    public function destroy(Enterprise $enterprise): RedirectResponse
    {
        if (
            $enterprise->logo &&
            Storage::disk('public')->exists($enterprise->logo)
        ) {
            Storage::disk('public')->delete($enterprise->logo);
        }

        $enterprise->delete();

        return redirect()
            ->route('enterprises.index')
            ->with('success', 'Entreprise supprimée avec succès.');
    }
}