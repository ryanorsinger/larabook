<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    @yield('topscript')

  </head>
  <body>

    @include('partials.navbar')

    <div class="container">

      @include('partials.session-messages')

      @yield('content')

      @include('partials.footer')

    </div>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script>
    @yield('bottomscript')
    </script>

  </body>
</html>
