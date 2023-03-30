<?php
$error_code=$error_msg="";
$con=mysqli_connect("localhost","root","") or die(mysql_error());
mysqli_select_db($con,'shiftairways');
if(isset($_POST["submit"])){
	
	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$address=$_POST["address"];
	$city=$_POST["city"];
	$leavingdate=$_POST["leavingdate"];
    $returndate=$_POST["returndate"];

	if(is_numeric($firstname)&&($lastname)){
		$error_code=2;
		$error_msg="Number is not allowed";
	}

	
	if(is_numeric($address) &&($city) ){
		$error_code=3;
		$error_msg="invalid input";
	}
    if(is_numeric($leavingdate) &&($returndate) ){
		$error_code=3;
		$error_msg="invalid input";
	}
	$query="INSERT INTO `member`(`firstname`, `lastname`, `address`, `city`, `leavingdate`, `returndate`, `child`, `class`) VALUES ('$firstname','$lastname','$address','$city','$leavingdate','$returndate')";
	$result=mysqli_query($con,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
          <li><i class="fas fa-user-alt"></i> About</li>
          <li><i class="fas fa-envelope"></i> Contact</li>
        </ul>
      </nav>
  </section>
<div class="row">
  <div class="col-75">
    <div class="container1">
      <form name="myform" action="#" method="dialog" onsubmit="return validateform()" > 
        <div class="row">
          <div class="col-50">
            <h3>Booking address</h3>
            <label for="fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Abraham">
            <p id="fn" style="color: red; font: weight 6px; font-size: x-small;"></p>
            <label for="email"><i class="fa fa-user"></i>Last name</label>
            <input type="text" id="lname" name="lastname" placeholder="Shiferaw">
            <p id="ln" style="color: red; font: weight 6px; font-size: x-small;"></p>
            <label for="adr"><i class="fa fa-address-card-o"></i>leaving from</label>
            <input type="text" id="adr" name="address" placeholder="Adiss ababa">
            <p id="ad" style="color: red; font: weight 6px; font-size: x-small;"></p>
            <label for="city"><i class="fa fa-institution"></i>Destination</label>
            <input type="text" id="city" name="city" placeholder="bahidar">
            <p id="cc" style="color: red; font: weight 6px; font-size: x-small;"></p>
            <label for="city"><i class="fa fa-calendar"></i>Leaving Date</label>
            <input type="date" id="date" name="date" placeholder="">
            <p id="dd" style="color: red; font: weight 6px; font-size: x-small;"></p>
            <label for="city"><i class="fa fa-calendar"></i>Return date</label>
            <input type="date" id="date" name="date" placeholder="bahidar">
            <p id="dd" style="color: red; font: weight 6px; font-size: x-small;"></p>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Accept terms & privacy
          <p id="gd"></p>
        </label>
        <input type="submit" value="get my ticket" class="btn">
      </form>
    </div>
  </div>
  </div>
</div>
</section>

</body>
</html>