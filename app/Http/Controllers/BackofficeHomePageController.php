<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class BackofficeHomePageController extends Controller
{
  public function homePage() {
    return view('backoffice_home_page', [
      'homePageInfo' => Homepage::first(),
      'user' => User::all('real_name')
    ]);
  }

  public function homePageEdit() {
    return view('backoffice_home_page_edit', [
      'homePageInfo' => Homepage::first()
    ]);
  }

  public function homePageEditConfirm(Request $request, Homepage $homePageInfo) {
    $userInputs = $request->validate([
      'title' => 'required',
      'img' => 'required',
      'text' => 'required'
    ]);   

    $userInputs['editor_id'] = auth()->id();
    if($homePageInfo->update($userInputs)) {
      return redirect('/backoffice/home_page_edit')->with('editSuccess', 'Edition Successfull!');
    }
  }
}
