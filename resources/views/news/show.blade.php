@extends('layouts.application')

@section('conteudo')
  <h3>{{$item->title}}</h3>
  <p>{{$item->body}}</p>
@stop
