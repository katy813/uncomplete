<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel CRUD</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
    body{
    background-color: #FDFDFD;
    }
    .container{
    background: #CEB255;
    padding: 2;
    border-top-left-radius: 1rem;
    border-bottom-left-radius: 1rem;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <br><br><br>
      @yield('content')
    </div>

  </body>


</html>
