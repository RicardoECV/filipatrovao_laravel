<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Homepage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home() {  
    return view('home', [
      'homePage' => Homepage::first(),
      'contacts' => Contacts::first()
    ]);
  }
}
