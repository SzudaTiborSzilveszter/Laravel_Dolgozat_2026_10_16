<?php

namespace App\Http\Controllers;

use App\Models\type;
use App\Http\Requests\StoretypeRequest;
use App\Http\Requests\UpdatetypeRequest;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Type::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretypeRequest $request)
    {
        $record=new Type();
        $record->create($request->all());
        return $record;
    }

    /**
     * Display the specified resource.
     */
    public function show(type $type)
    {
        return $type;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetypeRequest $request, type $type)
    {
        $record = Type::findorFail($type->id);
        $record->update($request->all());
        return $record;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(type $type)
    {
        return $record = Type::destroy($type->id);
    }
}
