<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use App\Models\User;
use App\Models\Myjourneys;
use App\Models\Personalinterests;
use App\Models\Skills;
use Illuminate\Http\Request;

class BackofficeAboutmePageController extends Controller
{
  public function aboutmePage() {
    return view('backoffice_aboutme_page', [
      'aboutmePageInfo' => Aboutme::first(),
      'user' => User::all('real_name'),
      'skills' => Skills::all(),
      'myJourneys' => Myjourneys::all(),
      'personalInterests' => Personalinterests::all()
    ]);
  }
}
