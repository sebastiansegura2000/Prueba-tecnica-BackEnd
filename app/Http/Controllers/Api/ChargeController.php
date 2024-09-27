<?php

namespace App\Http\Controllers\Api;

use App\Models\Charge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChargeController extends Controller
{

    public function index()
    {
        return Charge::all();
    }

    public function store(Request $request)
    {
        $request->validate(['name_charge' => 'required']);
        return Charge::create($request->all());
    }

    public function update(Request $request, Charge $charge)
    {
        $request->validate(['name_charge' => 'required']);
        $charge->update($request->all());
        return $charge;
    }

    public function destroy(Charge $charge)
    {
        $charge->delete();
        return response()->json(['message' => 'Charge deleted successfully']);
    }

}
