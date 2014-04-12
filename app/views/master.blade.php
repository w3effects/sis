<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page </title>

    <!-- Bootstrap-->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
      {{ HTML::style('css/style.css') }}
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Flaty Theme
    <link href="http://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet">
-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="flash_msg" style="display: none;">
      @if(Session::has('success_message'))
        <script> $('.flash_msg').slideDown().delay(3000).slideUp(); </script>
        <p>{{Session::get('success_message') }} </p>
      @endif

      @if(Session::has('error_message'))
      <script> $('.flash_msg').slideDown().delay(3000).slideUp(); </script>
        <p>{{Session::get('error_message') }} </p>
      @endif
  </div>
  <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
          <div class="navbar-header">
              <a href="#" class="navbar-brand">Site Name </a>
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
          </div>
          <div class="navbar-collapse collapse" id="navbar-main">
              <ul class="nav navbar-nav">
                  <li>
                      <a href="#">Link 1</a>
                  </li>
                  <li>
                      <a href="#">Link 2</a>
                  </li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                  <li><a href="#" target="_blank">Link 3</a></li>
                  <li><a href="#" target="_blank">Link 4</a></li>
              </ul>

          </div>
      </div>
  </div>
<div class="content">
  @yield('content')
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script>
      $('.flash_msg').delay(3000).slideUp();
  </script>
  </body>
</html>