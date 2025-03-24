<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use App\Models\Contacts;
use App\Models\Homepage;
use App\Models\Expertises;
use App\Models\Myjourneys;
use Illuminate\Http\Request;
use App\Models\Personalinterests;

class AboutmeController extends Controller
{
  public function aboutme() { 
    return view('aboutme', [
      'home_page' => Homepage::first(),
      'contacts' => Contacts::first(),
      'aboutme_page' => Aboutme::first(),
      'expertises' => Expertises::all(),
      'myjourneys' => Myjourneys::all(),
      'personal' => Personalinterests::all()
    ]);
  }
}
