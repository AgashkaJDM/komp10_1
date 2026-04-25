<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::withCount('foods')->paginate(15);

        return view('restaurants.index', compact('restaurants'));
    }

    public function create()
    {
        return view('restaurants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:5',
            'phone_number' => 'required|string|max:20|unique:restaurants',
        ]);

        Restaurant::create($request->all());

        return redirect()->route('restaurants.index')->with('success', 'Restaurant created successfully.');
    }

    public function show(Restaurant $restaurant)
    {
        $foods = $restaurant->foods()->with('category')->paginate(15);
        return view('restaurants.show', compact('restaurant', 'foods'));
    }

    public function edit(Restaurant $restaurant)
    {
        return view('restaurants.edit', compact('restaurant'));
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:5',
            'phone_number' => 'required|string|max:20|unique:restaurants,phone_number,' . $restaurant->id,
        ]);

        $restaurant->update($request->all());

        return redirect()->route('restaurants.index')->with('success', 'Restaurant updated successfully.');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect()->route('restaurants.index')->with('success', 'Restaurant deleted successfully.');
    }
}
