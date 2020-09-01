<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Sign Up</title>

</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/">
          <img src="https://i.ibb.co/xF71hsd/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          E-ABSEN POLIWANGI
        </a>
        <a class="nav-item nav-link" href="signup">SIGN UP</a>
      </nav>

<!-- akhir navbar -->
<div class="container">
    @if(session()->has('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>

    @endif

          @yield('content')


  </div>

</body>
</html>