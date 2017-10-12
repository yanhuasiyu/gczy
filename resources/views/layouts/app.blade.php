<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix("css/app.css") }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="app"></div>
    @include("layouts.navbar")
    @yield('content')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ url('https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
