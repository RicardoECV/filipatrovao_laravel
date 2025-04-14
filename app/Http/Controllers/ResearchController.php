<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Homepage;
use App\Models\Projects;
use App\Models\Research;
use App\Models\Expertises;
use App\Models\Publications;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
  public function research() {
    return view('research', [
      'homePage' => Homepage::first(),
      'contacts' => Contacts::first(),
      'researchPage' => Research::first(),
      'expertises' => Expertises::all(),
      'publications' => Publications::all(),
      'projects' => Projects::all()
    ]);
  }
}
