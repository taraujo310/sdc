<nav>
  <div class="content">
    <ul>
      <li class="@if(Route::is('root')) active @endif">
        <a href="{{ action('PagesController@index') }}">
          Home
        </a>
      </li>
      <li>Projeto</li>
      <li class="@if(Route::is('news')) active @endif">
        <a href="{{ action('NewsController@index') }}">
          Notícias
        </a>
      </li>
    </ul>
  </div>
</nav>
