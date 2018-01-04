@extends('layouts.application')

@section('conteudo')

  @if ($event)

    <div class="row instructor">
      @foreach($event->instructors as $instructor)
      <div class="instructor">
        <img src="{{ $instructor->avatar }}" alt="{{ $instructor->name }}">
        <p>{{ $instructor->name }}</p>
        <div class="instructor-bio">
          <p>{{ $instructor->biography }}</p>
        </div>
      </div>
      @endforeach
    </div>

    <div class="row">
      <div class="col-md-6">
        <h2>VALORES</h2>
        <div class="values-descriptions">
          <p>Pacote Simples - R$ 35,00</p>
          <p>Pacote Master - R$ 50,00</p>
          <p>Aula Avulsa - R$ 20,00</p>
        </div>
      </div>
      <div class="col-md-6">
        <h2>Formas de Pagamento</h2>
        <div class="col-md-6 deposit">
          <strong>Depósito em Conta</strong>
          <p>
            Agência: 3333-3<br />
            Conta Corrente: 33333-33<br />
            José Ricardo da Silva
          </p>
        </div>
        <div class="col-md-6 deposit">
          <strong>Pagamento Online</strong>
          <p>Indisponível</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h2>Localização</h2>
          <div class="address-container">
            <div class="address-description pull-left">
              Endereço Completo, CEP 000000-000<br />
              Rua Uruguai, 50
            </div>
            <div class="address-reference pull-left">
              Próximo à Estação do Metrô
            </div>
          </div>
          <div class="row gmaps-container">
            MAPA
          </div>
        </div>
        <div class="col-md-6">
          <button type="button" name="button">INSCRIÇÃO</button>
          <button type="button" name="button">CRONOGRAMA</button>
        </div>
      </div>
    </div>
  @else
    <p>Não há eventos cadastrados</p>
  @endif

@stop
