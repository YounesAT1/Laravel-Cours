@extends('layouts.app')
@section('content')
    <h2>Ajouter un livre</h2>
    <form action="/books/ajouter" method="post">
        @csrf
        <label for="titre">Titre :</label>
        <input type="text" name="titre" required><br>

        <label for="genre">Genre :</label>
        <input type="text" name="genre" required><br>

        <label for="author">Auteur :</label>
        <input type="text" name="author" required><br>

        <label for="prix">Prix :</label>
        <input type="text" name="prix" required><br>

        <button type="submit">Ajouter</button>
    </form>
@endsection