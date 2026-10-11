@extends('layouts.app')
@section('title', 'Messages reçus')
@section('content')
<h1>Messages reçus</h1><div class="table-scroll"><table><thead><tr><th>Date</th><th>Nom</th><th>Objet</th><th>Transmission</th><th>Action</th></tr></thead><tbody>@forelse($messages as $contact)<tr><td>{{ $contact->created_at->format('d/m/Y H:i') }}</td><td>{{ $contact->name }}</td><td>{{ $contact->subject }}</td><td>{{ ['pending'=>'En attente','failed'=>'Échec','sent'=>'Transmis'][$contact->status] ?? $contact->status }}</td><td><a href="{{ route('admin.contacts.show', $contact) }}">Consulter</a></td></tr>@empty<tr><td colspan="5">Aucun message reçu.</td></tr>@endforelse</tbody></table></div><div class="pagination">@if($messages->previousPageUrl())<a href="{{ $messages->previousPageUrl() }}">Précédent</a>@endif @if($messages->nextPageUrl())<a href="{{ $messages->nextPageUrl() }}">Suivant</a>@endif</div>
@endsection
