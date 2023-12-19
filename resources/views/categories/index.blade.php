<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories List</title>
    @vite('resources/css/app.css')
  </head>

  <body class="bg-gray-100 p-6">
    <a href="{{ route('products.index') }}"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Products list</a>
    <a href="{{ route('products.create') }}"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Product</a>
    <a href="{{ route('categories.create') }}"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Category</a>


    <div class="mt-6 max-w-md mx-auto bg-white p-8 rounded shadow-md">
      @foreach ($categories as $category)
        <p class="mb-2">{{ $category->name }}</p>
        <hr>
      @endforeach
    </div>
  </body>

</html>
