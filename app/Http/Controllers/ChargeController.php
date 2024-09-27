<?php

namespace App\Http\Controllers;

use App\Models\Charge;
use Illuminate\Http\Request;

class ChargeController extends Controller
{

    public function index()
    {
        return Charge::all();
        return view('charges.index', compact('charges'));
    }

    public function create()
    {
        return view('charges.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name_charge' => 'required']);
        return Charge::create($request->all());
        return redirect()->route('charges.index')->with('success', 'Charge created successfully');
    }

    public function edit(Charge $charge)
    {
        return view('charges.edit', compact('charge'));
    }

    public function update(Request $request, Charge $charge)
    {
        $request->validate(['name_charge' => 'required']);
        $charge->update($request->all());
        // return $charge;
        return redirect()->route('charges.index')->with('success', 'Charge updated successfully');
    }

    public function destroy(Charge $charge)
    {
        $charge->delete();
        // return response()->json(['message' => 'Charge deleted successfully']);
        return redirect()->route('charges.index')->with('success', 'Charge deleted successfully');
    }

}
