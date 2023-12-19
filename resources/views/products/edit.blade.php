<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    @vite('resources/css/app.css')
  </head>

  <body class="bg-gray-100 p-6">
    <a href="{{ route('products.index') }}"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Products List</a>
    <form action="{{ route('products.update', ['product' => $product]) }}" method="POST" autocomplete="off"
      class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
      @csrf
      @method('PUT')

      <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Nom :</label>
        <input type="text" id="name" name="name" placeholder="Nom de produit..." value="{{ $product->name }}"
          class="w-full border-gray-300 rounded-md focus:outline-none focus:border-blue-500 px-4 py-2">
      </div>

      <div class="mb-4">
        <label for="price" class="block text-gray-700 font-bold mb-2">Prix :</label>
        <input type="number" id="price" name="price" placeholder="Prix de produit..."
          value="{{ $product->price }}"
          class="w-full border-gray-300 rounded-md focus:outline-none focus:border-blue-500 px-4 py-2">
      </div>

      <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Description :</label>
        <input type="text" id="description" name="description" placeholder="Description de produit..."
          value="{{ $product->description }}"
          class="w-full border-gray-300 rounded-md focus:outline-none focus:border-blue-500 px-4 py-2">
      </div>

      <div class="mb-4">
        <label for="category_id" class="block text-gray-700 font-bold mb-2">Choisir une catégorie :</label>
        <select name="category_id"
          class="w-full border-gray-300 rounded-md focus:outline-none focus:border-blue-500 px-4 py-2">
          <option value="" disabled>Choisir une catégorie</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
              {{ $category->name }}
            </option>
          @endforeach
        </select>
      </div>

      <button type="submit"
        class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modifier produit</button>
    </form>
  </body>

</html>
