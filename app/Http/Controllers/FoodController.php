<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
use App\Models\Restaurant;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::with('category', 'restaurant')->paginate(15);

        return view("foods.index", compact("foods"));
    }

    public function create()
    {
        $categories = Category::all();
        $restaurants = Restaurant::all();
        return view('foods.create', compact('categories', 'restaurants'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'code' => 'required|integer|unique:food',
            'category_id' => 'required|exists:categories,id',
            'restaurant_id' => 'required|exists:restaurants,id',
        ]);

        Food::create($request->all());

        return redirect()->route('foods.index')->with('success', 'Food created successfully.');
    }

    public function show($id)
    {
        $food = Food::with('category', 'restaurant')->where('id', $id)->firstOrFail();

        return view('foods.show', compact('food'));
    }

    public function edit(Food $food)
    {
        $categories = Category::all();
        $restaurants = Restaurant::all();
        return view('foods.edit', compact('food', 'categories', 'restaurants'));
    }

    public function update(Request $request, Food $food)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'code' => 'required|integer|unique:food,code,' . $food->id,
            'category_id' => 'required|exists:categories,id',
            'restaurant_id' => 'required|exists:restaurants,id',
        ]);

        $food->update($request->all());

        return redirect()->route('foods.index')->with('success', 'Food updated successfully.');
    }

    public function destroy(Food $food)
    {
        $food->delete();

        return redirect()->route('foods.index')->with('success', 'Food deleted successfully.');
    }
}
