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
  		$c=mysqli_connect($servername,$username,$password,"Shangri");

  		if(mysqli_connect_error())
  			echo "Connection not established";

  		$n=$_POST['name'];
  		$m=$_POST['mail'];
  		$p=$_POST['pno'];
      if($_POST['king']==true)
  		  $king=1;
      else
        $king=0;
      if($_POST['queen']==true)
        $queen=1;
      else
        $queen=0;
      if($_POST['single']==true)
        $single=1;
      else
        $single=0;
      if($_POST['twin']==true)
        $twin=1;
      else
        $twin=0;
  		
     	$cin=$_POST['checkin'];
     	$cout=$_POST['checkout'];
     	$pass=$_POST['password'];
      $bid=rand(1000,9999);

  		$q="INSERT INTO Account (Name,Mail,Contact,Checkin,Checkout,Password,Queen,king,single,twin,bid) VALUES ('$n','$m','$p','$cin','$cout','$pass','$queen','$king','$single','$twin','$bid')";
      $r="INSERT INTO Customer (Name,Mail,Contact,Checkin,Checkout,Password,Queen,king,single,twin,bid) VALUES ('$n','$m','$p','$cin','$cout','$pass','$queen','$king','$single','$twin','$bid')";
  		$p="INSERT INTO Subscription (Mail) VALUES ('$m')";
  		mysqli_query($c,$q);
  		mysqli_query($c,$p);
  		if(!mysqli_query($c,$r)) 
  		{
  			die('Error:'.mysqli_error());
  		}
      echo "<h4>This is your booking ID</h4>".$bid;
      echo "<h4>Do save it for future reference</h4>";
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