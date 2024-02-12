<?php

namespace App\Http\Controllers;

use App\Models\CoreUser;
use Illuminate\Http\Request;

class CoreUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coreUsers = CoreUser::all();
        return response()->json($coreUsers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Not needed for API
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $coreUser = CoreUser::create($request->all());
        return response()->json($coreUser, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $coreUser = CoreUser::findOrFail($id);
        return response()->json($coreUser);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Not needed for API
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coreUser = CoreUser::findOrFail($id);
        $coreUser->update($request->all());
        return response()->json($coreUser, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coreUser = CoreUser::findOrFail($id);
        $coreUser->delete();
        return response()->json(null, 204);
    }
}
