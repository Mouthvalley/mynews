@extends('layouts.profile')

@section('title', '入力フォーム')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>入力フォーム</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

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
                            <input type="text" class="form-control" name="neme" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">gender</label>
                        <div class="col-md-10">
                            <input type="radio" name="gender" value="0">男性
                            <input type="radio" name="gender" value="1">女性
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">hobby</label>
                        <div class="col-md-10">
                            <input type="text" name="hobby">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">introduction</label>
                        <div class="col-md-10">
                            <textarea name="introduction" rows="8" cols="80"></textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection
