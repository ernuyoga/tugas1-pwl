<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'email' => 'nullable|string|email|max:255',
            'phone' => 'nullable|string|max:255',
            'company_id' => 'required|exists:companies,id',
        ]);

        $employee = Employee::create($validatedData);

        return response()->json([
            'message' => 'Employee created successfully.',
            'employee' => $employee
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $employee = Employee::findOrFail($id);
            return response()->json($employee);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Employee not found.'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'email' => 'nullable|string|email|max:255',
            'phone' => 'nullable|string|max:255',
            'company_id' => 'required|exists:companies,id',
        ]);

        try {
            $employee = Employee::findOrFail($id);
            $employee->update($validatedData);

            return response()->json([
                'message' => 'Employee updated successfully.',
                'employee' => $employee
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Employee not found.'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $employee = Employee::findOrFail($id);
            $employee->delete();

            return response()->json([
                'message' => 'Employee deleted successfully.'
            ], 204);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Employee not found.'
            ], 404);
        }
    }
}