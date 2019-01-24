<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
  public function edit()
  {
    return view('admin.profile.edit');
  }
  public function update()
  {
    return redirect('admin/profile/edit');
  }
  public function cretae()
  {
    return create('admin/profile/create');
  }
}


//publicはclassの中で
//unexpected:枠外にある
