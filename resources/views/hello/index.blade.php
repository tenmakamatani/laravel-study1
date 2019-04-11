@extends('layouts.layout')

@section('title', 'Write your name')

@if ($isName)
  @section('name')
    <p>{{$name}}</p>
  @endsection
@else
  @section('name')
    
  @endsection
@endif

@section('content')
  @parent
  <p>あなたの名前を書いてください</p>
  @include('components.form')
@endsection