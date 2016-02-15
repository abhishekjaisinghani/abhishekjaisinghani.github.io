<html>

<head>  

<title>Soundlounge</title>

<link href="style.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>

<body>

	 <div id="header" class="text-center">  
		<span id="logo" ><a href="index.php"><img src="img/Logo.png" height="24" width="190" class="shiftDown"></a></span>
	
	</div>
  <br><br>
	<section class="container">
    <div class="box">
      <h1>Log in</h1>
      <hr class= "line">
      <form method="post" action="index.php" class="text-center">
        <p><input class="stylebox" type="text" name="login" value="" placeholder="Username or Email"></p>

        <p><input class="stylebox" type="password" name="password" value="" placeholder="Password"></p>

        <div class="login-help">
      	<p> <a href="index.php">Forgot your password?</a></p>
    	
    	</div>
        <p class="remember_me">
          
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <a href="welcome.php"><input type="button" class="button" value="Log in"></a>
      </form>
    </div>
  </section>
		
</body>

</html>