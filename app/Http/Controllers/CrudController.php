<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crud = Crud::latest()->paginate(3);
        return view("crud.index", compact("crud"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("crud.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=> "required|string",
        ]);
        Crud::create(["name"=>$request->input("name")]);
        return redirect()->route("crud.index")->with("success", "Berhasil menambahkan Data!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crud = Crud::find($id);
        return view("crud.edit", compact("crud"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required|string",
        ]);
        $crud = Crud::find($id);
        $crud->update(["name" => $request->input("name")]);
        return redirect()->route("crud.index")->with("success", "Berhasil update Data!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud = Crud::find($id);
        $crud->delete();
        return redirect()->route("crud.index")->with("success", "Berhasil hapus Data!");
    }
}
