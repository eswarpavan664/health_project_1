<?php

namespace App\Http\Controllers;

use App\Models\HealthAdmin;
use Illuminate\Http\Request;

class HealthAdminController extends Controller
{
    public function index()
    {
        $healthAdmins = HealthAdmin::all();
        return response()->json($healthAdmins);
    }

    public function store(Request $request)
    {
        $healthAdmin = HealthAdmin::create($request->all());
        return response()->json($healthAdmin, 201);
    }

    public function show($id)
    {
        $healthAdmin = HealthAdmin::findOrFail($id);
        return response()->json($healthAdmin);
    }

    public function update(Request $request, $id)
    {
        $healthAdmin = HealthAdmin::findOrFail($id);
        $healthAdmin->update($request->all());
        return response()->json($healthAdmin, 200);
    }

    public function destroy($id)
    {
        $healthAdmin = HealthAdmin::findOrFail($id);
        $healthAdmin->delete();
        return response()->json(null, 204);
    }
}

