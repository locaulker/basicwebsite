<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Acme</title>
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
 
  @include('inc.navbar')

  <div class="container">
    @if(Request::is('/'))
      @include('inc.showcase')
    @endif

    <div class="row">
      <div class="col-sm-8 col-lg-8">
        @include('inc.error-messages')
        @yield('content')
      </div>
      <div class="col-sm-4 col-lg-4">
        @include('inc.sidebar')
      </div>
    </div>
  </div>

  <footer id="footer" class="text-center">
    <p>Copyright 2018 &copy; &mdash; BasicWebsite</p>
  </footer>
</body>
</html>