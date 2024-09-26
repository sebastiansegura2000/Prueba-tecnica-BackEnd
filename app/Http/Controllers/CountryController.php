<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function index()
    {
        return Country::all();
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        return Country::create($request->all());
    }

    public function update(Request $request, Country $country)
    {
        $request->validate(['name' => 'required']);
        $country->update($request->all());
        return $country;
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return response()->json(['message' => 'Country deleted successfully']);
    }

}
