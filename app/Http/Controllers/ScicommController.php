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
        'homePage' => Homepage::first(),
        'contacts' => Contacts::first(),
        'scicommPage' => Scicomm::first(),
        'scicommCards' => Scicommcards::all(),
        'activities' => Activities::all(),
        'multimediaContent' => Multimediacontent::all()
      ]);
    }
}
