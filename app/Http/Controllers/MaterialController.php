<?php

namespace App\Http\Controllers;
use App\Models\Material;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all();
        return view('materials.index', compact('materials'));
    }

    public function create()
    {
        return view('materials.create');
    }

    public function show($id)
    {
        $material = Material::find($id);

        if (!$material) {
            abort(404);
        }

        return view('materials.show', compact('material'));
    }

    public function store(Request $request, Course $course)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'embed_link' => 'required',
        ]);

        $course->materials()->create($validatedData);

        return redirect()->route('courses.show', $course);
    }

    public function edit(Course $course, Material $material)
    {
        return view('materials.edit', compact('course', 'material'));
    }

    public function update(Request $request, Course $course, Material $material)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'embed_link' => 'required',
        ]);

        $material->update($validatedData);

        return redirect()->route('courses.show', $course);
    }

    public function destroy(Course $course, Material $material)
    {
        $material->delete();

        return redirect()->route('courses.show', $course);
    }

}
