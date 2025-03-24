<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Homepage;
use App\Models\Projects;
use App\Models\Research;
use App\Models\Publications;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
  public function research() {
    return view('research', [
      'home_page' => Homepage::first(),
      'contacts' => Contacts::first(),
      'research_page' => Research::first(),
      'publications' => Publications::all(),
      'projects' => Projects::all()
    ]);
  }
}
