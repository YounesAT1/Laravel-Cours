<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Car</title>
  @vite('resources/css/app.css')
  </head>
<body class="bg-gray-100 p-6">
  <div class="flex items-center justify-between gap-6">
    <h1 class="text-3xl mb-6 mr-6 hover:underline">
      <a href="{{route('car.index')}}">List Cars</a>
    </h1>
  </div>
  <form action="{{ route('car.store') }}" method="POST" autocomplete="off" class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    <h1 class="text-3xl mb-6">Add Car</h1>
    @csrf
    <div class="mb-4">
      <label for="matricule" class="block text-gray-700 text-sm font-bold mb-2">Matricule :</label>
      <input type="text" id="matricule" name="matricule" placeholder="Matricule..." class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
    </div>
    <div class="mb-4">
      <label for="marque" class="block text-gray-700 text-sm font-bold mb-2">Marque :</label>
      <input type="text" id="marque" name="marque" placeholder="Marque..." class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
    </div>
    <div class="mb-4">
      <label for="model" class="block text-gray-700 text-sm font-bold mb-2">Model :</label>
      <input type="text" id="model" name="model" placeholder="Model..." class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
    </div>
    <div class="mb-6">
      <label for="type" class="block text-gray-700 text-sm font-bold mb-2">Type :</label>
      <input type="text" id="type" name="type" placeholder="Type..." class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
    </div>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">Ajouter</button>
  </form>
</body>
</html>
