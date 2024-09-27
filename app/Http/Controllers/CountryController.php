<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function index()
    {
        // return Country::all();
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        return Country::create($request->all());
        return redirect()->route('countries.index')->with('success', 'Country created successfully');
    }

    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $request->validate(['name' => 'required']);
        $country->update($request->all());
        // return $country;
        return redirect()->route('countries.index')->with('success', 'Country updated successfully');
    }

    public function destroy(Country $country)
    {
        $country->delete();
        // return response()->json(['message' => 'Country deleted successfully']);
        return redirect()->route('countries.index')->with('success', 'Country deleted successfully');
    }

}
