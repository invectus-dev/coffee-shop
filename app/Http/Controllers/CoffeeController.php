<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kopi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kopi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required',
            'distributor' => 'required',
            'harga' => 'required',
        ]);

        Coffee::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Coffee $coffee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coffee $coffee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coffee $coffee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coffee $coffee)
    {
        //
    }
}
