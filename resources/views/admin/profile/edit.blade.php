@extends('layouts.profile')

@section('title', 'My プロフィール')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>ニュース新規作成</h2>
      </div>
    </div>
  </div>
  <div class="row mt-5">
      <div class="col-md-4 mx-auto">
          <h2>編集履歴</h2>
          <ul class="list-group">
              @if ($news_form->histories != NULL)
                  @foreach ($news_form->histories as $history)
                      <li class="list-group-item">{{ $history->edited_at }}</li>
                  @endforeach
              @endif
          </ul>
      </div>
  </div>
@endsection
