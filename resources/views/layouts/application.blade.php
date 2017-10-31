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

    <div id="content-body" class="content">
      @yield('conteudo')
    </div>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    @include('layouts.footer')

    <script src="/js/bootstrap.js" type="text/javascript">

    </script>
  </body>
</html>
