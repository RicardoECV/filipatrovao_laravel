<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class BackofficeUserController extends Controller
{
  public function login(Request $request) {
    $userInputs = $request->validate([
      'loginname' => 'required',
      'loginpassword' => 'required'
    ]);

    if (auth()->attempt(['name' => $userInputs['loginname'], 'password' => $userInputs['loginpassword']])) {
      $request->session()->regenerate();     
    }

    $errors = new MessageBag(['password' => ['Login ou PW errados!']]);
    return redirect('/backoffice')->withErrors($errors);
  }

  public function logout(Request $request) {
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/backoffice');
  }
}
