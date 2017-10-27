<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Novidades</title>
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>
    @include('layouts.header')

    @include('layouts.nav')

    <div class="content">
      @yield('conteudo')
    </div>

    @include('layouts.footer')
  </body>
</html>
