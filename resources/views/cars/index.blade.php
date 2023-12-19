<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
    @vite('resources/css/app.css')
  </head>

  <body class="bg-gray-100 p-6">
    <h1 class="text-3xl mb-6">Cars List</h1>
    <table class="w-full border-collapse border border-gray-400 text-center">
      <thead>
        <tr>
          <th colspan="8" class="py-2">
            <a href="{{ route('car.create') }}" class="text-2xl text-blue-500 hover:underline">Add Car</a>
          </th>
        </tr>
        <tr>
          <th class="py-2 px-4 bg-gray-200 border border-gray-400">ID</th>
          <th class="py-2 px-4 bg-gray-200 border border-gray-400">Matricule</th>
          <th class="py-2 px-4 bg-gray-200 border border-gray-400">Marque</th>
          <th class="py-2 px-4 bg-gray-200 border border-gray-400">Model</th>
          <th class="py-2 px-4 bg-gray-200 border border-gray-400">Type</th>
          <th class="py-2 px-4 bg-gray-200 border border-gray-400" colspan="3">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cars as $car)
          <tr>
            <td class="py-2 px-4 border border-gray-400">{{ $car->id }}</td>
            <td class="py-2 px-4 border border-gray-400">{{ $car->matricule }}</td>
            <td class="py-2 px-4 border border-gray-400">{{ $car->marque }}</td>
            <td class="py-2 px-4 border border-gray-400">{{ $car->model }}</td>
            <td class="py-2 px-4 border border-gray-400">{{ $car->type }}</td>
            <td class="py-2 px-4 border border-gray-400">
              <a href="{{ route('car.edit', ['car' => $car]) }}" class="text-blue-500 hover:underline">Modifier</a>
            </td>
            <td class="py-2 px-4 border border-gray-400">
              <form action="{{ route('car.destroy', ['car' => $car]) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
              </form>
            </td>
            <td class="py-2 px-4 border border-gray-400">
              <a href="{{ route('car.detail', ['car' => $car]) }}" class="text-green-500 hover:underline">Details</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>

</html>
