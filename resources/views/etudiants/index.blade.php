<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Etudiants</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
  <h1 class="text-3xl mb-6">Liste des etudiants</h1>
  <table class="border border-gray-300 rounded-md w-full text-center">
    <thead class="bg-gray-200">
      <tr>
        <th colspan="6" class="py-2">
          <a href="{{route('etudiant.create')}}" class="text-2xl text-blue-500 hover:underline">Ajouter etudiant</a>
        </th>
      </tr>
      <tr>
        <th class="px-4 py-2">ID</th>
        <th class="px-4 py-2">Nom</th>
        <th class="px-4 py-2">Prénom</th>
        <th class="px-4 py-2">CIN</th>
        <th class="px-4 py-2" colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($etudiants as $etudiant)
        <tr>
          <td class="border px-4 py-2">{{$etudiant->id}}</td>
          <td class="border px-4 py-2">{{$etudiant->nom}}</td>
          <td class="border px-4 py-2">{{$etudiant->prenom}}</td>
          <td class="border px-4 py-2">{{$etudiant->cin}}</td>
          <td class="border px-4 py-2">
            <a href="{{route('etudiant.edit',['etudiant' => $etudiant])}}" class="text-blue-500 hover:underline">Modifier</a>
          </td>
          <td class="border px-4 py-2">
            <form action="{{route('etudiant.destroy', ['etudiant' => $etudiant])}}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
