<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Login</title>
{{-- style --}}
<style>
  body {
    font-family: 'Quicksand', sans-serif;
    color: steelblue;
    margin-top: 30px;
    margin-left: 270px;
    padding: 0;
    background-color: #F5F5F5; 
 }
 img{
   width:35px;
 }
 h2{
   color: #261f1f;
   font-weight: bold;
   margin-left: 10px;
   margin-top: 80px;
 }
P{
  color:#A08f8f;
  font-size: 20px;
  margin-left: 10px;
  margin-bottom: 50px;
}
  .card{
    box-shadow: 0 4px 8px 0 rgba(0,0,0, 0.2);
    border-radius: 5px;
    padding: 20px;
    margin-top: 20px;
  }
  #content {
   float: left;
   width: 75%;
}
.btn{
  width: 600px;
  margin-left: 126px;
}
.navbar-brand b{
  margin-left: 20px;
  font-size: 15px;
}
.nav-item{
  font-size: 15px;
}
.forgot{
  margin-left: 580px;
  font-size: 12px;
}
label{
  font-size: 12px;
}
</style>

</head>
<body>
{{-- navbar --}}
<div class="container">
<div id="content">
  <article class="card" id="login">
    <nav class="navbar navbar-light bg-transpernt">
      <a class="navbar-brand" href="/">
        <img src="https://i.ibb.co/xF71hsd/logo.png" width="30" height="35" class="d-inline-block align-top" alt=""><b>E-ABSEN POLIWANGI</b>
              <a class="nav-item nav-link" href="signup">SIGN UP</a>
    </nav>

    <h2>LOGIN</h2>
    <P>Login to continue to <a href="">E-ABSEN POLIWANGI</a></P>
 
   
    <!-- card -->
<div class="container">
  <form action="/postlogin" method="POST">
    @csrf
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="email" name="email">
      </div>
    </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input id="password" type="password" class="form-control" placeholder="password" name="password">
    </div>
  </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Remember me
        </label>
      </div>
    </div>
  </form>
  </div>
      <button type="submit" class="btn btn-primary">Login</button>
      <a class="forgot" href="forgot">Forgot your password ?</a>

</body>
</html>