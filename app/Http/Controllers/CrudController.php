<?php
namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $cruds = Crud::all();
        return view('cruds.index', compact('cruds'));
    }

    public function create()
    {
        return view('cruds.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Crud::create($request->all());
        return redirect()->route('cruds.index')->with('success', 'Crud created successfully.');
    }

    public function show(Crud $crud)
    {
        return view('cruds.show', compact('crud'));
    }

    public function edit(Crud $crud)
    {
        return view('cruds.edit', compact('crud'));
    }

    public function update(Request $request, Crud $crud)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $crud->update($request->all());
        return redirect()->route('cruds.index')->with('success', 'Crud updated successfully.');
    }

    public function destroy(Crud $crud)
    {
        $crud->delete();
        return redirect()->route('cruds.index')->with('success', 'Crud deleted successfully.');
    }
}
