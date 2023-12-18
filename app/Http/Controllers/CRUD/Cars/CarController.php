<?php

namespace App\Http\Controllers\CRUD\Cars;

use Illuminate\Http\Request;
use App\Models\CRUD\Cars\Car;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function index () {
        $cars = Car::All();
        return view('cars.index', ['cars' => $cars]);
    }

    public function create() {
        return view('cars.create');
    }

    public function store (Request $request) {
        $validatedData = $request -> validate([
            'matricule'=> 'required',
            'marque' => 'required',
            'model' => 'required',
            'type' => 'required',
        ]);

        Car::create($validatedData);

        return redirect() -> route('car.index');
    }

    public function edit (Car $car) {
        return view('cars.edit', ['car' => $car]);
    }

    public function update (Car $car, Request $request) {
        $validatedData = $request->validate([
            'matricule'=> 'required',
            'marque' => 'required',
            'model' => 'required',
            'type' => 'required',
        ]);
  
        $car ->update($validatedData);
  
        return redirect()->route('car.index');
    }

    public function destroy (Car $car) {
        $car->delete();
        return redirect()->route('car.index');
    }

    public function details (Car $car) {
        return view('cars.details', ['car' => $car]);
    }
}
