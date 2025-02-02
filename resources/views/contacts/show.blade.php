<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettaglio Contatto</title>
</head>
<body>
    <h1>Dettaglio Contatto</h1>
    <p><strong>ID:</strong> {{ $contact->id }}</p>
    <p><strong>Nome:</strong> {{ $contact->name }}</p>
    <p><strong>Cognome:</strong> {{ $contact->surname }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Telefono:</strong> {{ $contact->phone }}</p>
    <p><a href="{{ url('/contacts') }}">Torna alla lista</a></p>
</body>
</html>
