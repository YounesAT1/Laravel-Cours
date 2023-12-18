<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit page</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
  <div class="flex items-center justify-between gap-6">
    <h1 class="text-3xl mb-6 mr-6 hover:underline">
      <a href="{{route('etudiant.index')}}">List Etudiant</a>
    </h1>
  </div>
  <form action="{{ route('etudiant.update', ['etudiant' => $etudiant]) }}" method="POST" autocomplete="off" class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    @csrf
    @method('PUT')
    <h1 class="text-3xl mb-6">Editer Etudiant - ID: {{ $etudiant->id }}</h1>
    <div class="mb-4">
      <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom :</label>
      <input type="text" id="nom" name="nom" placeholder="Nom..." value="{{ $etudiant->nom }}" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
    </div>
    <div class="mb-4">
      <label for="prenom" class="block text-gray-700 text-sm font-bold mb-2">Prénom :</label>
      <input type="text" id="prenom" name="prenom" placeholder="Prénom..." value="{{ $etudiant->prenom }}" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label for="cin" class="block text-gray-700 text-sm font-bold mb-2">CIN :</label>
      <input type="text" id="cin" name="cin" placeholder="CIN..." value="{{ $etudiant->cin }}" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
    </div>
    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">Modifier</button>

  </form>
</body>
</html>
