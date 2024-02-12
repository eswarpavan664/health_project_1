<?php

namespace App\Http\Controllers;

use App\Models\HealthcareProvider;
use Illuminate\Http\Request;

class HealthcareProviderController extends Controller
{
    public function index()
    {
        $healthcareProviders = HealthcareProvider::all();
        return response()->json($healthcareProviders);
    }

    public function store(Request $request)
    {
        $healthcareProvider = HealthcareProvider::create($request->all());
        return response()->json($healthcareProvider, 201);
    }

    public function show($id)
    {
        $healthcareProvider = HealthcareProvider::findOrFail($id);
        return response()->json($healthcareProvider);
    }

    public function update(Request $request, $id)
    {
        $healthcareProvider = HealthcareProvider::findOrFail($id);
        $healthcareProvider->update($request->all());
        return response()->json($healthcareProvider, 200);
    }

    public function destroy($id)
    {
        $healthcareProvider = HealthcareProvider::findOrFail($id);
        $healthcareProvider->delete();
        return response()->json(null, 204);
    }
}
