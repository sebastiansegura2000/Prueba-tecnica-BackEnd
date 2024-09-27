<?php

namespace App\Http\Controllers\Api;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{

    public function index()
    {
        return City::with('country')->get();
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required', 'country_id' => 'required']);
        return City::create($request->all());
    }

    public function update(Request $request, City $city)
    {
        $request->validate(['name' => 'required']);
        $city->update($request->all());
        return $city;
    }

    public function destroy(City $city)
    {
        $city->delete();
        return response()->json(['message' => 'City deleted successfully']);
    }

}
