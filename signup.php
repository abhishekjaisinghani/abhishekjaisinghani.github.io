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
    <div class="box-two">
      <h1>Sing Up</h1>
      <hr class= "line">
      <form method="post" action="welcome.php" class="text-center">
        <div class="first-row">
        <input class="stylebox" type="text" name="rest" value="" placeholder="Restaurant/Cafe Name">
        <input class="stylebox" type="text" name="email" value="" placeholder="Email ID">
        <input class="stylebox" type="text" name="user" value="" placeholder="Username">
      </div>
      <div class="second-row">
        <input class="stylebox" type="text" name="plot" value="" placeholder="Plot #">
        <input class="stylebox" type="text" name="line1" value="" placeholder="Address Line 1">
        <input class="stylebox" type="text" name="line2" value="" placeholder="Address Line 2">
      </div>
      <div class="third-row">
        <input class="stylebox" type="text" name="city" value="" placeholder="City">
        <input class="stylebox" type="text" name="state" value="" placeholder="State">
      </div>
      <div class="fourth-row">
        <input class="stylebox" type="password" name="password" value="" placeholder="Password">
        <input class="stylebox" type="password" name="repassword" value="" placeholder="Re-Enter Password">
        <input class="stylebox" type="number" name="number" value="" placeholder="Contact Number">
      </div>
        <div class="dropdown">
        <button class="dropbtn">Select a Plan</button>
        <div class="dropdown-content">
        <a href="#">Silver - 1999/Month</a>
        <a href="#">Gold - 2499/Month</a>
        <a href="#">Platinum - 2999/Month</a>
        </div>
        </div>
        <input type="submit" class="button" value="Sign Up">
      </form>
    </div>
  </section>
		
</body>

</html>