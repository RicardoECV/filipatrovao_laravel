<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use App\Models\Contacts;
use App\Models\Homepage;
use App\Models\Myjourneys;
use App\Models\Personalinterests;
use App\Models\Skills;

class AboutmeController extends Controller
{
  public function aboutme() { 
    return view('aboutme', [
      'homePage' => Homepage::first(),
      'contacts' => Contacts::first(),
      'aboutmePage' => Aboutme::first(),
      'skills' => Skills::all(),
      'myJourneys' => Myjourneys::all(),
      'personal' => Personalinterests::all()
    ]);
  }
}
