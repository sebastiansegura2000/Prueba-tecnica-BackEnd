<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

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
