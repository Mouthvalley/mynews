@extends('layouts.front')

@section('content')
  {{$profile->name}}
  {{$profile->gender}}
  {{$profile->hobby}}
  {{$profile->introduction}}
@endsection
