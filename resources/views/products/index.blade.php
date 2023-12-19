<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
    <div class="flex justify-between mb-4">
        <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Product</a>
        <a href="{{ route('categories.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Category</a>
    </div>

    <h2 class="text-2xl font-bold mb-4">You have {{ $products->count() }} products</h2>

    <table class="w-full mb-8 text-center">
        <thead>
            <tr class="bg-gray-200">
                <th class="py-2 px-4">Name</th>
                <th class="py-2 px-4">Description</th>
                <th class="py-2 px-4">Price</th>
                <th class="py-2 px-4">Category</th>
                <th class="py-2 px-4" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($products as $product)
            <tr class="border-b font-semibold">
                <td class="py-2 px-4 ">{{ $product->name }}</td>
                <td class="py-2 px-4">{{ $product->description }}</td>
                <td class="py-2 px-4">{{ $product->price }}</td>
                <td class="py-2 px-4">{{ $product->category->name }}</td>
                <td class="py-2 px-4">
                    <a href="{{ route('products.edit', ['product' => $product]) }}" class="text-white bg-blue-600 p-3 rounded-lg">Edit</a>
                </td>
                <td class="py-2 px-4">
                    <form action="{{ route('products.destroy', ['product' => $product]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="bg-red-500 text-white p-2 rounded-lg">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class="text-2xl font-bold">Your total is: {{ number_format($totalPrice, 2, ',', ' ') }} DH</h2>
</body>
</html>
