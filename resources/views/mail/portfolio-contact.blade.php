Nouvelle demande reçue depuis le portfolio

Nom : {{ $contact->name }}
E-mail : {{ $contact->email }}
Objet : {{ $contact->subject }}

{{ $contact->message }}

Référence : {{ $contact->id }}
Date : {{ $contact->created_at->format('d/m/Y H:i') }}
