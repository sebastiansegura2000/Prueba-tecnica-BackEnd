<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Models\City;
use App\Models\Country;
use App\Models\Charge;

class EmployeeController extends Controller
{

    public function view()
    {
        $employees = Employee::with('charges', 'city')->get();
        return view('employees.index', compact('employees'));
    }

    public function index()
    {
        $employees = Employee::with('charges', 'City')->get();
        return response()->json($employees);
    }

    public function create()
    {
        $countries = Country::all();
        $charges = Charge::all();
        return response()->json(['countries' => $countries, 'charges' => $charges]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'names' => 'required',
            'last_names' => 'required',
            'identification' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'city_id' => 'required',
            'boss_id' => 'nullable|exists:employees,id',
            'charge_ids' => 'required|array'
        ]);

        $employee = Employee::create($request->all());
        $employee->charges()->attach($request->charge_ids);

        return response()->json($employee, 201);
    }

    public function show($id)
    {
        $employee = Employee::with('charges', 'boss', 'subordinates')->findOrFail($id);
        return response()->json($employee);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return response()->json($employee);
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return response()->json(null, 204);
    }

}
