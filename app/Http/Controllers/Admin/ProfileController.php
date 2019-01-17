<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
}

public function edit()
{
  return view('admit.profile.edit');
}
public function update()
{
  return redirect('admit/profile/edit');
}
//コメント
