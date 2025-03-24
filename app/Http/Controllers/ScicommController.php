<?php

namespace App\Http\Controllers;

use App\Models\Scicomm;
use App\Models\Contacts;
use App\Models\Homepage;
use App\Models\Activities;
use App\Models\Scicommcards;
use Illuminate\Http\Request;
use App\Models\Multimediacontent;

class ScicommController extends Controller
{
    public function scicomm() {
      return view('scicomm',[
        'home_page' => Homepage::first(),
        'contacts' => Contacts::first(),
        'scicomm_page' => Scicomm::first(),
        'scicomm_cards' => Scicommcards::all(),
        'activities' => Activities::all(),
        'multimedia_content' => Multimediacontent::all()
      ]);
    }
}
