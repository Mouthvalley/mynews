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
  public function create(Request $request)
  {
    return redirect('admin/profile/create');
  }
}

//public function 名 を同じ function にはできない。
//publicはclassの中。unexpected:枠外にあるという意味
