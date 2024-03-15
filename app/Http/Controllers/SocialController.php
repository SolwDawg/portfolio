<?php

namespace App\Http\Controllers;

use App\Http\Resources\SocialResource;
use App\Models\Social;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;


class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socials = SocialResource::collection(Social::with('user')->get());
        return Inertia::render('Socials/Index', compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return Inertia::render('Socials/Create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'social_url' => ['required'],
            'icon_svg' => ['required'],
        ]);
        if ($request->user_id) {
            Social::create([
                'user_id' => $request->user_id,
                'name' => $request->name,
                'social_url' => $request->social_url,
                'icon_svg' => $request->icon_svg,
            ]);

            return Redirect::route('socials.index')->with('message', 'Social created successfully.');
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
    public function edit(Social $social)
    {
        $users = User::all();
        return Inertia::render('Socials/Edit', compact('social', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Social $social)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'social_url' => ['required'],
            'icon_svg' => ['required'],
        ]);

        if ($request->user_id) {
            $social->update([
                'user_id' => $request->user_id,
                'name' => $request->name,
                'social_url' => $request->social_url,
                'icon_svg' => $request->icon_svg,
            ]);

            return Redirect::route('socials.index')->with('message', 'Social updated successfully.');
        }

        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        $social->delete();
        return Redirect::route('socials.index')->with('message', 'Project deleted successfully.');
    }
}
