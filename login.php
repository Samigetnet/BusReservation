<?php 
//session beign
session_start();
$error_code=$error_msg="";
$con=mysqli_connect("localhost","root","") or die(mysql_error());
mysqli_select_db($con,'alphabus');
if(isset($_POST["button"])){
	$username=$_POST["username"];
	$password=$_POST["password"];
	$query="INSERT INTO loog(username, password) VALUES ('$username','$password')";
	$result=mysqli_query($con,$query);	
	$qu="select * from loog";	
	$re=mysqli_query($con,$qu);
	$row=mysql_fetch_assoc("$re");
	while($row){
		
		if($row["username"]==$username && $row["password"]==$password){
			$_SESSION["username"]="hallo";
			header("location:login.html");
			echo "hello !! This is alphabus you already in the bus station if want to take a bus please login";
		}
		else {
			echo "Ooops! invalid user";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<section class="rotate">
    <div class="container">
      <div class="circle-container">
        <div class="circle">
          <button id="close">
            <i class="fas fa-times"></i>
          </button>
          <button id="open">
            <i class="fas fa-bars"></i>
          </button>
        </div>
      </div>
      <nav>
        <ul>
          <li><a href="home.html"><i class="fas fa-home">Home</i> </li></a>
          <li><a href="homw.html" style="color: white; text-decoration: none;"><i class="fas fa-user-alt"></i> About</li></a>
          <li><a href="contact.html" style="color: white; text-decoration: none;"><i class="fas fa-envelope"></i> Contact</li></a>
        </ul>
      </nav>
  </section>
        <section>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="logo"><a href="#"><span style="color:#1845ad">Alpha</span><span style="color:#ff512f">bus</span></a></div>
    <form name="myform" action="#" method="dialog" onsubmit="return validateform()" > 
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" name="username">
        <p id="un" style="color: red; font: weight 6px; font-size: x-small;"></p>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">
        <p id="pas" style="color: red; font: weight 6px; font-size: x-small;" ></p>

        <button>Log In</button>
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>
  </section>
</body>
</html>