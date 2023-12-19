<!DOCTYPE html>
<html>
<head>
  <title>Add Category</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 p-6">
  <a href="{{ route('categories.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Categories List</a>
  <form action="{{ route('categories.store') }}" method="post" autocomplete="off" class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
    @csrf
    <div class="mb-4">
      <label for="name" class="block text-gray-700 font-bold mb-2">Category Name:</label>
      <input type="text" id="name" name="name" required class="w-full border-gray-300 rounded-md focus:outline-none focus:border-blue-500 px-4 py-2">
    </div>
    <input type="submit" value="Add Category" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  </form>
</body>
</html>
