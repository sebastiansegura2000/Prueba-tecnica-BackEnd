<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function index()
    {
        return City::with('country')->get();
        return view('cities.index', compact('cities'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('cities.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required', 'country_id' => 'required']);
        return City::create($request->all());
        return redirect()->route('cities.index')->with('success', 'City created successfully');
    }

    public function edit(City $city)
    {
        $countries = Country::all();
        return view('cities.edit', compact('city', 'countries'));
    }

    public function update(Request $request, City $city)
    {
        $request->validate(['name' => 'required']);
        $city->update($request->all());
        // return $city;
        return redirect()->route('cities.index')->with('success', 'City updated successfully');
    }

    public function destroy(City $city)
    {
        $city->delete();
        // return response()->json(['message' => 'City deleted successfully']);
        return redirect()->route('cities.index')->with('success', 'City deleted successfully');
    }

}
