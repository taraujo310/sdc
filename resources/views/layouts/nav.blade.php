<nav>
  <div class="content">
    <ul>
      <li class="@if(Route::is('root')) active @endif">
        <a href="{{ action('PagesController@index') }}">
          Home
        </a>
      </li>
      <li class="@if(Route::is('about')) active @endif">
        <a href="{{ action('PagesController@index') }}">
          Sobre
        </a>
      </li>
      <li class="@if(Route::is('events')) active @endif">
        <a href="{{ action('PagesController@index') }}">
          Eventos
        </a>
      </li>
      <li class="@if(Route::is('social_project')) active @endif">
        <a href="{{ action('PagesController@index') }}">
          Projeto Social
        </a>
      </li>
      <li class="@if(Route::is('partnerships')) active @endif">
        <a href="{{ action('PagesController@index') }}">
          Parcerias
        </a>
      </li>
      <li class="@if(Route::is('curatorship')) active @endif">
        <a href="{{ action('PagesController@index') }}">
          Curadoria
        </a>
      </li>
      <li class="@if(Route::is('team')) active @endif">
        <a href="{{ action('PagesController@index') }}">
          Equipe
        </a>
      </li>
      <li>
        <a href="{{ action('PagesController@index') }}">
          Shop
        </a>
      </li>
      <li class="@if(Route::is('news')) active @endif">
        <a href="{{ action('NewsController@index') }}">
          Notícias
        </a>
      </li>
      <li class="@if(Route::is('contact')) active @endif">
        <a href="{{ action('PagesController@index') }}">
          Contato
        </a>
      </li>
    </ul>
  </div>
</nav>
