<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<body>


<!------ Include the above in your HEAD tag ---------->


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    	<div>
			@if(Session::has('failure'))
			<div class="col-md-12 alert alert-danger">
			{{ Session::get('failure') }}
			</div>
			@endif
		</div>
      Admin Login
    </div>

    <!-- Login Form -->
    <form method="post" action="{{ url('store') }}">
    	@csrf
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="login"><br>
      <br>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <br>
      <input type="submit" class="fadeIn fourth" value="Log In" style="height: 20px;text-align:center ;">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>