<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // Fetch all employees from the database
        $employees = \App\Models\Tsstfkary::with('tsstfdvsi')->get();

        // Return the view with the employees data
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }


    public function store(Request $request)
    {
        dd($request->all());

        // Validate and store the employee data
        $validatedData = $request->validate([
            'kdkary' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'kddvsi' => 'required|string|max:255',
            'dob' => 'required|date',
            'regdt' => 'required|date',
        ]);

        // Store the employee data in the database
        \App\Models\Tsstfkary::create($validatedData);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }
}
