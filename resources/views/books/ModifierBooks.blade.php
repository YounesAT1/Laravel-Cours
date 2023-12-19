@extends('books\layouts.app')

@section('content')
    <h2>Modifier le livre</h2>
    <form action="/books/modifier/{{ $book->numero }}" method="post">
        @csrf
        <label for="titre">Titre :</label>
        <input type="text" name="titre" value="{{ $book->titre }}" required><br>

        <label for="genre">Genre :</label>
        <input type="text" name="genre" value="{{ $book->genre }}" required><br>

        <label for="author">Auteur :</label>
        <input type="text" name="author" value="{{ $book->author }}" required><br>

        <label for="prix">Prix :</label>
        <input type="text" name="prix" value="{{ $book->prix }}" required><br>

        <button type="submit">Modifier</button>
    </form>
@endsection