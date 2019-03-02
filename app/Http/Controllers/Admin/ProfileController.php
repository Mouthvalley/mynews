<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\History;
use Carbon\Carbon;
use App\ProfileHistory;

class ProfileController extends Controller
{

  public function add()
  {
      return view('admin.profile.create');
  }
/*追加
*Laravel09
*/
  public function edit(Request $request)
  {
    $profile = Profile::find($request->id);
    return view('admin.profile.edit', ['profile_form' => $profile]);
  }

  public function update(Request $request)
  {
    $this->validate($request, Profile::$rules);
    $profile = Profile::find($request->id);
    $profile_form = $request->all();

    unset($profile_form['_token']);

    //保存作業
    $profile->fill($profile_form)->save();

    $history = new ProfileHistory;
    $history->profile_id = $profile->id;
    $history->edited_at = Carbon::now();
    $history->save();

    return redirect('/admin/profile/edit');
  }

  public function create(Request $request)
  {
    $profile = new Profile;
    $this->validate($request, Profile::$rules);

    $form = $request->all();

    // フォームから送信されてきた_tokenを削除する
    unset($form['_token']);
    // データベースに保存する
    $profile->fill($form);
    $profile->save();

    //newを行う時は、useをしてあげる
    return redirect('/admin/profile/create');

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
