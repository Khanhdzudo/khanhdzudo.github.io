<? 
include("includes.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Khanh Dzu Do - S328390">
    <meta name="generator" content="Khanh Dzu Do - S328390">
    <title>NT Photography Social Network</title>

    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
	  
	  <?=$_SESSION['username'];?>
    <form class="form-signin" action="doLogin.php" method="post">
 NT Photography User
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="email" name="email" class="form-control" placeholder="Email address"  autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="pw" name="pw" class="form-control" placeholder="Password" >
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" >Sign in</button>
  <p class="mt-5 mb-3 text-muted">Khanh Dzu Do - S328390 - 2021</p>
</form>
</body>
</html>
