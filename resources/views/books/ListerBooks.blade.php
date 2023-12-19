@extends('books\layouts.app')

@section('content')
    <h2>Liste des livres</h2>
    <ul>
        @foreach($books as $book)
            <li><a href="/books/{{ $book->numero }}">{{ $book->titre }}</a></li>
        @endforeach
    </ul>
@endsection