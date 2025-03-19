<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\Projects;
use App\Models\Publications;
use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
  public function research() {
    return view('research', [
      'home_page' => Homepage::first(),
      'research_page' => Research::first(),
      'publications' => Publications::all(),
      'projects' => Projects::all()
    ]);
  }
}
