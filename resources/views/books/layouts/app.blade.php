<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Bookstore</title>
    <!-- Ajoutez ici vos liens CSS, scripts, etc. -->
  </head>

  <body>

    <header>
      <h1>Laravel Bookstore</h1>
      <nav>
        <ul>
          <li><a href="/books">Liste des livres</a></li>
          <li><a href="/books/ajouter">Ajouter un livre</a></li>
        </ul>
      </nav>
    </header>

    <main>
      @yield('content')
    </main>

    <footer>
      <!-- Ajoutez ici le contenu du pied de page -->
    </footer>

    <!-- Ajoutez ici vos scripts JS, etc. -->

  </body>

</html>
