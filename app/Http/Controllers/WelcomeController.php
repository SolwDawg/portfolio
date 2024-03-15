<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Http\Resources\SkillResource;
use App\Http\Resources\SocialResource;
use App\Models\Social;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Project;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $skills = SkillResource::collection(Skill::all());
        $projects = ProjectResource::collection(Project::with('skill')->get());
        $socials = SocialResource::collection(Social::all());

        return Inertia::render('Welcome', compact('skills', 'projects', 'socials'));
    }
}
