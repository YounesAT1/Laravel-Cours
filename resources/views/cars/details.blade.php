<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Details</title>
    @vite('resources/css/app.css')
    </head>
<body class="bg-gray-100 p-6">
  <div class="flex items-center justify-between gap-6">
    <h1 class="text-3xl mb-6 mr-6 hover:underline">
      <a href="{{route('car.index')}}">List Cars</a>
    </h1>
  </div>
    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <table class="w-full">
            <tbody>
                <tr class="bg-gray-100">
                    <td class="py-2 px-4 font-semibold">ID</td>
                    <td class="py-2 px-4">{{ $car->id }}</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 font-semibold">Matricule</td>
                    <td class="py-2 px-4">{{ $car->matricule }}</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="py-2 px-4 font-semibold">Marque</td>
                    <td class="py-2 px-4">{{ $car->marque }}</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 font-semibold">Model</td>
                    <td class="py-2 px-4">{{ $car->model }}</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="py-2 px-4 font-semibold">Type</td>
                    <td class="py-2 px-4">{{ $car->type }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
