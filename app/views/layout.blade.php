<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SIEX</title>

  <!-- jQuery -->
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

  <!-- IEca -->
	<!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  <!-- CSS da aplicação -->
  <link rel="stylesheet" href="/css/main.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2-bootstrap.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.js"></script>
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-custom navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Navegar</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">SIEX</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-left">
        @foreach(Misc::models() as $path => $label)
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{{ $label }}} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{{ $path }}}">Buscar</a></li>
              <li><a href="{{{ $path . '/create' }}}">Criar</a></li>
            </ul>
          </li>
        @endforeach
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Olá, {{{ preg_split("#\s+#", Auth::user()->name, 1, PREG_SPLIT_NO_EMPTY)[0] }}} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/logout">Sair</a></li>
            </ul>
          </li>
        @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Olá, anônimo!<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/login">Fazer login</a></li>
              <li><a href="/signup">Fazer cadastro</a></li>
            </ul>
          </li>
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container" role="main">
  @if(Session::has('message'))
    <div class="alert alert-danger" role="alert">{{{ Session::get('message') }}}</div>
  @endif

  @if(Session::has('success'))
    <div class="alert alert-success" role="alert">{{{ Session::get('success') }}}</div>
  @endif

  @foreach($errors->all() as $message)
    <div class="alert alert-danger" role="alert">{{{ $message }}}</div>
  @endforeach

  {{ $content }}
</div>

<footer class="footer">
  <div class="container">
    <p class="text-muted">©2015</p>
  </div>
</footer>

</body>

</html>
