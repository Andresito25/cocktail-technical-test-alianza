<?php

namespace App\Http\Controllers\API;

use App\Models\Cocktail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class cocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::all();

        return view('dashboard', [
            'cocktails' => $cocktails
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cocktail = new Cocktail($request->all());
        $cocktail->save();
        return response()->json(['coctail' => $cocktail], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cocktail = DB::table('cocktails')->find($id);

        return view('cocktails', compact('cocktail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
