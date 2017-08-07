@extends('layouts.application')

@section('conteudo')
  <h2>Novidades</h2>
  <a href="{{ action('NewsController@new') }}">Criar Notícia</a>
  @forelse ($news as $news_item)
    <h3>
      <a href="{{ action('NewsController@show', $news_item->id) }}">
        {{$news_item->title}}
      </a>
      |
      <small>
        <a href="#">editar</a>,
        <form class="" action="{{ route('news.destroy', ['id' => $news_item->id]) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <input type="hidden" name="id" value="$news_item->id">
          <input type="submit" value="deletar" class='btn btn-danger'>
        </form>
      </small>
    </h3>
    {{$news_item->body}}
  @empty
    <h3>Não há notícias cadastradas</h3>
  @endforelse
@stop
