<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return response()->json($companies);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'phone' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
        ]);

        $company = Company::create($validatedData);

        return response()->json([
            'message' => 'Company created successfully.',
            'company' => $company
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $company = Company::findOrFail($id);
            return response()->json($company);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Company not found.'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'phone' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
        ]);

        try {
            $company = Company::findOrFail($id);
            $company->update($validatedData);

            return response()->json([
                'message' => 'Company updated successfully.',
                'company' => $company
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Company not found.'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $company = Company::findOrFail($id);
            $company->delete();

            return response()->json([
                'message' => 'Company deleted successfully.'
            ], 204);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Company not found.'
            ], 404);
        }
    }

    /**
     * Get the employee count for the specified company.
     */
    public function employeeCount(string $id)
    {
        try {
            $company = Company::findOrFail($id);
            $employeeCount = $company->employees()->count();

            return response()->json([
                'employee_count' => $employeeCount
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Company not found.'
            ], 404);
        }
    }
}