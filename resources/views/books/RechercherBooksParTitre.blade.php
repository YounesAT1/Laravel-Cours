@extends('books\layouts.app')

@section('content')
    <h2>Rechercher des livres par titre</h2>
    <form action="/books/rechercher-par-titre" method="post">
        @csrf
        <label for="titre">Titre :</label>
        <input type="text" name="titre" required><br>

        <button type="submit">Rechercher</button>
    </form>

    <h3>Résultats de la recherche</h3>
    <ul>
        @foreach($books as $book)
            <li><a href="/books/{{ $book->numero }}">{{ $book->titre }}</a></li>
        @endforeach
    </ul>
@endsection