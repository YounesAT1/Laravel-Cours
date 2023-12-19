<?php

namespace App\Http\Controllers\CRUD\Books;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CRUD\Books\Book;

class BookController extends Controller
{
    public function ajouter(Request $request)
    {
        // Logique pour ajouter un livre
        Book::create($request->all());

        return redirect('/books');
    }

    public function supprimer($numero)
    {
        // Logique pour supprimer un livre
        Book::destroy($numero);

        return redirect('/books');
    }

    public function modifier($numero)
    {
        // Logique pour afficher le formulaire de modification
        $book = Book::findOrFail($numero);

        return view('books.ModifierBooks', compact('book'));
    }

    public function mettreAJour(Request $request, $numero)
    {
        // Logique pour mettre à jour un livre
        $book = Book::findOrFail($numero);
        $book->update($request->all());

        return redirect('/books');
    }

    public function detail($numero)
    {
        // Logique pour afficher les détails d'un livre
        $book = Book::findOrFail($numero);

        return view('books.DetailBook', compact('book'));
    }

    public function lister()
    {
        // Logique pour lister tous les livres
        $books = Book::all();

        return view('books.ListerBooks', compact('books'));
    }

    public function rechercherBooksParTitre(Request $request)
    {
        // Logique pour rechercher des livres par titre
        $titre = $request->input('titre');
        $books = Book::where('titre', 'like', '%' . $titre . '%')->get();

        return view('books.ListerBooks', compact('books'));
    }

    public function rechercherBooksParAuthor(Request $request)
    {
        // Logique pour rechercher des livres par auteur
        $author = $request->input('author');
        $books = Book::where('author', 'like', '%' . $author . '%')->get();

        return view('books.ListerBooks', compact('books'));
    }
}
