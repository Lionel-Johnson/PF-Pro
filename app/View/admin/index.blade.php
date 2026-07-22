@extends('layouts.admin')

@section('title','Gestion des services')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h1 class="h3 fw-bold">

                Gestion des services

            </h1>

            <p class="text-muted">

                Administration des services proposés par Lionel Concept.

            </p>

        </div>

        <a
            href="{{ route('admin.services.create') }}"
            class="btn btn-primary">

            <i class="fa-solid fa-plus"></i>

            Nouveau service

        </a>

    </div>

    @if(session('success'))

        <x-alert type="success">

            {{ session('success') }}

        </x-alert>

    @endif

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <table class="table table-hover align-middle">

                <thead>

                <tr>

                    <th>#</th>

                    <th>Image</th>

                    <th>Titre</th>

                    <th>Position</th>

                    <th>Mis en avant</th>

                    <th>Statut</th>

                    <th width="180">

                        Actions

                    </th>

                </tr>

                </thead>

                <tbody>

                @forelse($services as $service)

                    <tr>

                        <td>

                            {{ $service->id }}

                        </td>

                        <td>

                            @if($service->image)

                                <img

                                    src="{{ asset('storage/'.$service->image) }}"

                                    width="70"

                                    class="rounded"

                                    alt="">

                            @endif

                        </td>

                        <td>

                            <strong>

                                {{ $service->title }}

                            </strong>

                        </td>

                        <td>

                            {{ $service->position }}

                        </td>

                        <td>

                            @if($service->featured)

                                <span class="badge bg-warning">

                                    Oui

                                </span>

                            @else

                                <span class="badge bg-secondary">

                                    Non

                                </span>

                            @endif

                        </td>

                        <td>

                            @if($service->is_active)

                                <span class="badge bg-success">

                                    Actif

                                </span>

                            @else

                                <span class="badge bg-danger">

                                    Inactif

                                </span>

                            @endif

                        </td>

                        <td>

                            <a

                                href="{{ route('admin.services.edit',$service) }}"

                                class="btn btn-sm btn-warning">

                                Modifier

                            </a>

                            <form

                                action="{{ route('admin.services.destroy',$service) }}"

                                method="POST"

                                class="d-inline">

                                @csrf

                                @method('DELETE')

                                <button

                                    class="btn btn-sm btn-danger"

                                    onclick="return confirm('Supprimer ce service ?')">

                                    Supprimer

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7">

                            Aucun service.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

            {{ $services->links() }}

        </div>

    </div>

</div>

@endsection