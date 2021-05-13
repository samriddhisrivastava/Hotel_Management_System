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
            <button class="login" ><a href="Myacc.php">My Acc.</a></button>
            <button class="login"><a href="signup.html">Book now</a></button>
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

        if (isset($_POST['biid'])) 
        {
        $name = $_POST['biid'];
        }
        $result=mysqli_query($c,"DELETE FROM account where bid='$name'");
    		if (!$result) 
    		{
    			die('Error:'.mysqli_error($c));
    		}
    		mysqli_close($c);
    ?>

	<div>
		<h1 style="color: white;"></h1>
	</div>
    <h3 style="color: white;">Thank you for staying with us!</h3><br>
    <h4 style="color: white;">We hope to serve you soon!</h4>
    <button class="login" style="margin-left: 700px;"><a href="review.html">Write a review</a></button>
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