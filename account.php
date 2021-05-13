<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="submit.css">
</head>
<body>
	<nav id="navbar">
        <div style="float: left;">
            <a href="index.html"><img id="img" src="pic/crown.jpg" border="0"></a>
            <h2 id="h4"><b id="b">Shangri-la</b></h2>
        </div>
        <div style="float: left;">
            <h1 id="h1">.Luxury.Redefined.</h1>
        </div>
        <div style="float: right;margin-top: 2%;">
            <button class="login" ><a href="login.html">Checkout</a></button>
            <button class="login"><a href="signup.html">Create Acc.</a></button>
            <select class="login">
              <option value="Korean">Korean</option>
              <option value="English">English</option>
              <option value="Chinese">Chinese</option>
              <option value="Japanese">Japanese</option>
            </select>
        </div>
    </nav>
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $c=mysqli_connect($servername,$username,$password,"shangri");

    if(mysqli_connect_error())
      echo "Connection not established";

    $king=0;
    $queen=0;
    $twin=0;
    $single=0;
    $q = "SELECT Name, Mail, Contact, Checkin, Checkout FROM customer";
    $r = mysqli_query($c,$q);
    $i=0;
    echo "<br><br><br>";
    if(!$r)
      die('Error:'.mysqli_error());
  	$m=$_POST['mail'];
    while($row = mysqli_fetch_assoc($r))
    {
    	if($m===$row['Mail'])
    	{
	      echo "Booking Number:".++$i."<br>";
	      echo "Name:".$row['Name']."<br>";
	      echo "Mail:".$row['Mail']."<br>";
	      echo "Contact:".$row['Contact']."<br>";
	      echo "Checkin Date:".$row['Checkin']."<br>";
	      echo "Checkout Date:".$row['Checkout']."<br>";
	      echo "<br><br><br>";
  		}
    }

    mysqli_close($c);
  ?>
  <div id="foot">
        <div style="margin-left: 15px; margin-top: 10px;">
            <a href="#"><img id="foot-img" src="pic/crown.jpg" border="0"></a>
            <h3 id="h3-img">GRAND LUXURY HOTELS<br>SHANGRI-LA</h3>
            <hr>
            <p id="foot-p">Contact our experts for free<br><h4>+44 20 3519 2700</h4></p>
            <a href="http://wwww.pinterest.com"><img class="foot-logo" src="pic/pinterest.png" border="0"></a>
            <a href="http://www.twitter.com"><img class="foot-logo" src="pic/twitter.png" border="0"></a>
            <a href="http://www.instagram.com"><img class="foot-logo" src="pic/instagram.png" border="0"></a>
            <a href="http://www.youtube.com"><img class="foot-logo" src="pic/youtube.png" border="0"></a>
            <a href="http://www.facebook.com"><img class="foot-logo" src="pic/facebook.png" border="0"></a>
            <p id="foot-details">Our Team - Grand Luxury Group - Le Club - Contact Us - Help - Terms & Conditions - Privacy policy</p>
        </div>
    </div>

</body>
</html>