@extends('layouts.app')

@section('title', 'Entreprises')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Entreprises</h3>

    <a href="{{ route('admin.enterprises.create') }}"
       class="btn btn-primary">
        Nouvelle entreprise
    </a>
</div>


@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif


<form method="GET" class="mb-3">
    <input 
        type="text"
        name="search"
        value="{{ request('search') }}"
        class="form-control"
        placeholder="Rechercher..."
    >
</form>


<table class="table table-bordered table-hover">

<thead>
<tr>
    <th>Nom</th>
    <th>Email</th>
    <th>Téléphone</th>
    <th>Statut</th>
    <th width="200">Actions</th>
</tr>
</thead>

<tbody>

@forelse($enterprises as $enterprise)

<tr>

<td>
{{ $enterprise->name }}
</td>

<td>
{{ $enterprise->email }}
</td>

<td>
{{ $enterprise->phone }}
</td>

<td>
@if($enterprise->is_active)
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

<a href="{{ route('admin.enterprises.show',$enterprise) }}"
class="btn btn-sm btn-info">
Voir
</a>


<a href="{{ route('admin.enterprises.edit',$enterprise) }}"
class="btn btn-sm btn-warning">
Modifier
</a>


<form 
method="POST"
action="{{ route('admin.enterprises.destroy',$enterprise) }}"
style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-sm btn-danger">
Supprimer
</button>

</form>

</td>

</tr>

@empty

<tr>
<td colspan="5" class="text-center">
Aucune entreprise
</td>
</tr>

@endforelse

</tbody>

</table>


{{ $enterprises->links() }}


@endsection