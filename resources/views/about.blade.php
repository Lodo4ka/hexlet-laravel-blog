@extends('layouts.app')

@section('header')
  <h1>О блоге</h1>
@endsection

@section('title')
  Эксперименты с Laravel на Хекслете
@endsection

@section('content')
  <ul>
  @foreach ($team as $member)
      <li>{{$member['name']}}</li>
  @endforeach
  </ul>
@endsection
