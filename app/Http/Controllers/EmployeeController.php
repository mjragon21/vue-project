<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display the employee form
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee', compact('employees'));
    }
    /**
     * Store a new employee
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'hire_date' => 'required|date',
        ]);

        // If you have an Employee model, you can store the data like this:
        Employee::create($validated);

        // For now, we'll just return with a success message
        return redirect()->route('employee.index')->with('success', 'Employee added successfully!');
    }
    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'hire_date' => 'required|date',
        ]);

        $employee->update($validated);

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully!');
    }
    /**
     * Remove the specified employee
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully!');
    }
}
