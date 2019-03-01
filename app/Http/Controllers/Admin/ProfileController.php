<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\History;
use Carbon\Carbon;

class ProfileController extends Controller
{

  public function add()
  {
      return view('admin.profile.create');
  }
/*追加
*Laravel09
*/
  public function edit()
  {
    return view('admin.profile.edit');
  }

  public function update()
  {
    return redirect('admin/profile/edit');

    $history = new History;
    $history->news_id = $news->id;
    $history->edited_at = Carbon::now();
    $history->save();

    return redirect('/admin/profile/');
  }

  public function create(Request $request)
  {
    $profile = new Profile;
    return redirect('admin/profile/create');
    //newを行う時は、useをしてあげる
  }

}
  //Profileの方なので、変数名は$newsではなく、$profileに変えた方がよい。

  /*create(Request $request)=このメソッドは$requestという引数をRequest型で受け取る
    *データベースに保存の箇所は、
    *NewsController
    *$news->fill($form);
    *$news->save();
  */


//public function 名 を同じ function にはできない。
//publicはclassの中。unexpected:枠外にあるという意味
