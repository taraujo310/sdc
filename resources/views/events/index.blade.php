@extends('layouts.application')

@section('conteudo')
  @include('layouts.slider')

  <div class="row">
    <div class="diretor-geral">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae efficitur neque. Nulla auctor commodo velit. Vestibulum in mollis risus. Mauris lacinia ante eget metus tincidunt, sed maximus nunc imperdiet. Nunc ac ligula pulvinar, laoreet leo eu, dignissim eros. Nullam imperdiet, elit in tempor finibus, orci dolor faucibus metus, a luctus enim est at dui. Vivamus ullamcorper placerat ante, in finibus sem rhoncus in. Duis rutrum lacus porttitor ornare tempus. Nunc vel metus sed felis tincidunt condimentum. In ut nibh purus. Aenean hendrerit lorem sollicitudin ornare porttitor. Nullam at elit sit amet nisl iaculis vehicula. Vivamus ac posuere ligula. Aliquam at tortor at lacus vulputate elementum.
    </div>
  </div>

  <div class="row">
    @if (count($events) > 0)
      <div class="events">
        @foreach ($events as $event)
          <a href="{{ action('EventsController@show', $event->id) }}">
            <div class="event col-md-6">
              <h2>{{ $event->name }}</h2>
              <img src="{{ $event->cover }}" alt="{{ $event->name }}">
              <p>{{ $event->description }}</p>
            </div>
          </a>
        @endforeach
      </div>
    @else
    <p>Não há eventos cadastrados</p>
    @endif
  </div>

  <div class="row">
    <div class="col-md-8 offset-md-2">
      <iframe width="535" height="315" src="https://www.youtube.com/embed/FcpuMa38iZI?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
@stop
