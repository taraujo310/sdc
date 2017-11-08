@extends('layouts.application')

@section('conteudo')

  <h2>{{ $event->name }}</h2>

  @foreach($event->instructors as $instructor)
    <p>$instructor->name</p><br/>
  @endforeach

@stop
