@extends('books\layouts.app')

@section('content')
    <h2>Rechercher des livres par auteur</h2>
    <form action="/books/rechercher-par-auteur" method="post">
        @csrf
        <label for="author">Auteur :</label>
        <input type="text" name="author" required><br>

        <button type="submit">Rechercher</button>
    </form>

    <h3>Résultats de la recherche</h3>
    <ul>
        @foreach($books as $book)
            <li><a href="/books/{{ $book->numero }}">{{ $book->titre }}</a></li>
        @endforeach
    </ul>
@endsection