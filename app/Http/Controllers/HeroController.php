<?php

namespace App\Http\Controllers;

use App\Http\Resources\HeroResource;
use App\Models\Hero_Section;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HeroController extends Controller
{
    public function index()
    {
        $skills = HeroResource::collection(Hero_Section::all());
        return Inertia::render("Hero/Index", compact("skills"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Skills/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'image' => ['required', 'image'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('skills');
            Skill::create([
                'name' => $request->name,
                'image' => $image
            ]);

            return Redirect::route('skills.index')->with('message', 'Skill created successfully.');
        }

        return Redirect::back();
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
    public function edit(Skill $skill)
    {
        return Inertia::render('Skills/Edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $image = $skill->image;
        $request->validate([
            'name' => ['required', 'min:3']
        ]);
        if ($request->hasFile('image')) {
            Storage::delete($skill->image);
            $image = $request->file('image')->store('skills');
        }

        $skill->update([
            'name' => $request->name,
            'image' => $image
        ]);

        return Redirect::route('skills.index')->with('message', 'Skill updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        Storage::delete($skill->image);
        $skill->delete();

        return Redirect::back()->with('message', 'Skill deleted successfully.');
    }
}
