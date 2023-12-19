@extends('books\layouts.app')

@section('content')
    <h2>Détails du livre</h2>
    <p>Titre : {{ $book->titre }}</p>
    <p>Genre : {{ $book->genre }}</p>
    <p>Auteur : {{ $book->author }}</p>
    <p>Prix : {{ $book->prix }}</p>
    <a href="/books">Retour à la liste</a>
@endsection