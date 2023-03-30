<?php

$error_code=$error_msg="";
$sucsses_code=$sucsses_msg="";
$con=mysqli_connect("localhost","root","") or die(mysql_error());
mysqli_select_db($con,'alpha');
if(isset($_POST["submit"])){
	$fullname=$_POST["fullname"];
	if(is_numeric($fullname)){
		$error_code=1;
		$error_msg="invalid input";
	}
	$uname=$_POST["nameoncard"];
	$email=$_POST["email"];
	$dob=$_POST["address"];
	if(empty($address)){
		$error_code=4;
		$error_msg="youra addres must be filled";
	}
	if(isset($_POST["city"]))
	{
	$gender=$_POST["city"];
	}
	if(empty($city)){
		$error_code=2;
		$error_msg="city must be filled";
	}
	if(isset($_POST["zipcode"]))
	{
	$pay=$_POST["zipcode"];
	}
	if(empty($zipcode)){
		$error_code=3;
		$error_msg="<p style='color:red ;font-size:small; margin-left: 1.5cm;'>payment detail must be selected.</p>.";
	}
	$card=$_POST["creditcardnumber"];
	$card2=$_POST["expmonth"];
	$date=$_POST["expyear"];
	$query="INSERT INTO `billing`(`fullname`, `email`, `address`, `city`, `state`, `zipcode`, `nameoncard`, `creditcardnumber`, `expmonth`,'expyear') VALUES ('$fullname','$email','$address','$city','$state','$zipcode','$nameoncard','$creditcardnumber','$expmonth','$expyear')";
	$result=mysqli_query($con,$query);
	
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="ab.css" />
    <title>reservation</title>
  </head>  
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
              <li><a href="home.html" style="color: white; text-decoration:none"><i class="fas fa-home">Home</i> </li></a>
              <li><a href="home.html" style="color: white; text-decoration:none"><i class="fas fa-user-alt"></i>about</li>
              <li><a href="ab.html" style="color: white; text-decoration:none"><i class="fas fa-envelope"></i> Contact</li></a>
            </ul>
          </nav>  
      <div class="content">
        <div class="conta">
          <form name="myform" action="#" method="dialog" onsubmit="return validateform()" > 
                <div class="row">
                    <div class="col">
                        <h3 class="title">billing address</h3>
                        <div class="inputBox">
                            full name :
                            <input type="text"  name ="fullname" placeholder="Abel paulos">
                            <p id="full" style="color: red; font: weight 6px; font-size: x-small;"></p>
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="email" placeholder="alphabus@onlinepay.com" name="email">
                            <p id="a" style="color: red; font: weight 6px; font-size: x-small;"></p>
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" placeholder="room - street - locality" name="address">
                            <p id="b" style="color: red; font: weight 6px; font-size: x-small;"></p>
                        </div>
                        <div class="inputBox">
                            <span>city :</span>
                            <input type="text" placeholder="Adiss Ababa" name="city">
                            <p id="c" style="color: red; font: weight 6px; font-size: x-small;"></p>
                        </div>
                        <div class="flex">
                            <div class="inputBox">
                                <span>state :</span>
                                <input type="text" placeholder="Ethiopia" name="state">
                                <p id="d" style="color: red; font: weight 6px; font-size: x-small;"></p>
                            </div>
                            <div class="inputBox">
                                <span>zip code :</span>
                                <input type="text" placeholder="1000"  name="zipcode">
                                <p id="e" style="color: red; font: weight 6px; font-size: x-small;"></p>
                            </div>
                        </div>
        
                    </div>
        
                    <div class="col">
        
                        <h3 class="title">payment</h3>
        
                        <div class="inputBox">
                            <span>cards accepted :</span>
                            <img src="card_img.png" alt="">
                        </div>
                        <div class="inputBox">
                            <span>name on card :</span>
                            <input type="text" placeholder="Abel paulos" name="nameoncard">
                            <p id="f" style="color: red; font: weight 6px; font-size: x-small;"></p>
                        </div>
                        <div class="inputBox">
                            <span>credit card number :</span>
                            <input type="number" placeholder="1111-2222-3333-4444" name="creditcardnumber">
                            <p id="g" style="color: red; font: weight 6px; font-size: x-small;"></p>
                        </div>
                        <div class="inputBox">
                            <span>exp month :</span>
                            <input type="text" placeholder="january" name="expmonth">
                            <p id="h" style="color: red; font: weight 6px; font-size: x-small;"></p>
                        </div>
                        <div class="flex">
                            <div class="inputBox">
                                <span>exp year :</span>
                                <input type="number" placeholder="2022" name="expyear">
                                <p id="i" style="color: red; font: weight 6px; font-size: x-small;"></p>
                            </div>
                            <div class="inputBox">
                                <span>CVV :</span>
                                <input type="text" placeholder="1234" name="cvv">
                                <p id="i" style="color: red; font: weight 6px; font-size: x-small;"></p>
                            </div>
                        </div>
        
                    </div>
            
                </div>
        
                <input type="submit" value="proceed to checkout" class="submit-btn">
        
            </form>
        </div>
    <script src="script.js"></script>
  </body>
</html>