@extends('layouts.application')

@section('conteudo')
    <div class="content">
        @include('layouts.slider')

        <div class="row director">
            <div class="director-inner">
                <div class="avatar pull-left">
                    <img src="/../images/director-avatar.png" alt="Michell Baes">
                    <h4>Michell Baes</h4>
                </div>
                <div class="biography">
                    <h3>SDC BRASIL</h3>

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae efficitur neque. Nulla auctor commodo velit. Vestibulum in mollis risus. Mauris lacinia ante eget metus tincidunt, sed maximus nunc imperdiet. Nunc ac ligula pulvinar, laoreet leo eu, dignissim eros.

                    <span>DIRETOR GERAL</span>
                </div>
            </div>
        </div>

        <div class="row">
            @if (count($events) > 0)
            <div class="events">
                @foreach ($events as $i => $event)
                <div class="event col-md-5 @if($i%2 != 0) col-md-offset-2 @endif">
                    <h2>
                        {{ $event->name }}
                        <div class="bullet top left"></div>
                        <div class="bullet top right"></div>
                        <div class="bullet down left"></div>
                        <div class="bullet down right"></div>
                    </h2>
                    <img src="{{ $event->cover }}" alt="{{ $event->name }}">
                    <p>{{ $event->description }}</p>
                </div>
                @endforeach
            </div>
            @else
            <p>Não há eventos cadastrados</p>
            @endif
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <iframe width="100%" height="515" src="https://www.youtube.com/embed/FcpuMa38iZI?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="outer-features-menu">
        <div class="content">
            @include('layouts.features-menu')
        </div>
    </div>
@stop
