@extends('layouts.application')

@section('conteudo')

  <h2>Nova Notícia</h2>

  <form class="" action="{{ action('NewsController@create') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="title">Título</label>
      <input type="text" name="title" value="{{ $item->title }}" class='form-control'>
    </div>
    <div class="form-group">
      <label for="body">Texto</label>
      <textarea name="body" rows="8" cols="80" class='form-control'>{{ $item->body }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
  </form>

@stop
