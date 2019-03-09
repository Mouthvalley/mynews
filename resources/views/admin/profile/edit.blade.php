@extends('layouts.profile')

@section('title', 'My プロフィール')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>プロフィール編集</h2>
      </div>
    </div>
  </div>
  <h2>入力フォーム</h2>
  <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">

      @if (count($errors) > 0)
          <ul>
              @foreach($errors->all() as $e)
                  <li>{{ $e }}</li>
              @endforeach
          </ul>
      @endif
      <div class="form-group row">
          <label class="col-md-2" for="title">name</label>
          <div class="col-md-10">
              <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-md-2" for="body">gender</label>
          <div class="col-md-10">
              <input type="radio" name="gender" value="0" @if ($profile_form->gender === '0') checked @endif>男性
              <input type="radio" name="gender" value="1" @if ($profile_form->gender === '1') checked @endif>女性
          </div>
      </div>
      <div class="form-group row">
          <label class="col-md-2" for="title">hobby</label>
          <div class="col-md-10">
              <input type="text" name="hobby" value="{{ $profile_form->hobby }}">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-md-2" for="title">introduction</label>
          <div class="col-md-10">
              <textarea name="introduction" rows="8" cols="80">{{ $profile_form->introduction }}</textarea>
          </div>
      </div>
      <input type="hidden" name="id" value="{{ $profile_form->id }}">
      {{ csrf_field() }}
      <input type="submit" class="btn btn-primary" value="更新">
  </form>
  <div class="row mt-5">
      <div class="col-md-4 mx-auto">
          <h2>編集履歴</h2>
          <ul class="list-group">
              @if ($profile_form->profile_histories != NULL)
                  @foreach ($profile_form->profile_histories as $history)
                      <li class="list-group-item">{{ $history->edited_at }}</li>
                  @endforeach
              @endif
          </ul>
      </div>
  </div>
@endsection
