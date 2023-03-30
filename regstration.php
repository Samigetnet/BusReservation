<?php
error_reporting(E_ALL ^ E_NOTICE);
$error_code=$error_msg="";
$con=mysqli_connect("localhost","root","") or die(mysql_error());
mysqli_select_db($con,'alphabus');
if(isset($_POST["submit"])){
	
	$fullname=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$cpassword=$_POST["confirmpassword"];
	if(is_numeric($fullname)){
		$error_code=1;
		$error_msg="your fullname cant be number";
	}
	if(empty($email)){
		$error_code=2;
		$error_msg="your email must be there";
	}
	$query="INSERT INTO `regsrtration`(`fullname`, `email`, `password`, `confirmpassword`) VALUES ('$fullname','$email','$password','$confirmpassword')";
	$result=mysqli_query($con,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regstration</title>
</head>
<body>
<body>

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
      <li><a href="about.html" style="text-decoration: none;"><i class="fas fa-user-alt"></i> About</li></a>
      <li><a href="index.html" style="text-decoration: none;"><i class="fas fa-envelope"></i> Contact</li></a>
    </ul>
  </nav>
  <div class="content">
    <p >
      <div class="background">
          <div class="shape"></div>
          <div class="shape"></div>
      </div>
      
      <div class="wrapper">
        <h2>Registration</h2>
        <form name="myform" action="kk.php" method="post" onsubmit="return validateform()" > 
          <div class="input-box">
            <input type="text" placeholder="Enter Your Name" name="name" >
            <p id="bb" style="color: red; font: weight 6px; font-size: x-small;"></p>
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter Your Email" name="email">
            <p id="cc" style="color: red; font: weight 6px; font-size: x-small;"></p>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Create password" name="password" >
            <p id="dd" style="color: red; font: weight 6px; font-size: x-small;"></p>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Confirm password" name="confirmpassword" >
            <p id="ee" style="color: red; font: weight 6px; font-size: x-small;"></p>
            <p id="ff" style="color: red; font: weight 6px; font-size: x-small;"></p>
          </div>
          <div class="policy">
            <input type="checkbox" name="check">
            <h3>I Accept all terms & Condition</h3>
            <p id="gg"></p>
          </div>
          <div class="input-box button">
              <input type="submit" name="submit" value="Register Now">
          </div>
          <div class="text">
            <h3>Alredy have an Account? <a href="#">Login Now</a></h3>
          </div>
        </form>
      </div>
</div>
<script src="script.js"></script>
</body>
</body>
</html>