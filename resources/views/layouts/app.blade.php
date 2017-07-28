<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>todolist</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <style media="screen">
      .plus{
        font-size: 70%;
      }
    </style>
  </head>
  <body>
    <header>
        <h1><i class="rotate fa fa-thumb-tack" aria-hidden="true"></i> To Do LIST </h1>
    </header>

  <div class="contenu">
    @yield('content')
</div>
</body>
</html>
