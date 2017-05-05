<!DOCTYPE html>
<html>
<title>LE PARKE'T</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<?php
if(isset($_POST['submit'])&&$_SERVER["REQUEST_METHOD"] == "POST")
{	 
$conn = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($conn,'parking');
$result = mysqli_query($conn,"SELECT * FROM login WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		//$message = "Invalid Username or Password!";
		echo '<script language="javascript">';
        echo 'alert("Invalid Username or Password!")';
        echo '</script>';
	} else {
		header('Location:test1.php');
	}
	}
//$res = mysqli_query($conn,'select * from login where username="$username" ');
//echo "<table border=1><tr><td>Emp No</td><td>Emp
//Name</td><td>Dept</td><tr>";
//while($row = mysqli_fetch_array($res,MYSQLI_BOTH)){
	//while($row = array mysqli_fetch_row( resource $res) ){
		 
//echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
//$row = mysqli_fetch_array($res);
//if($row[0]==$username)
//{
	//if($row[1]==$password)
	//{
		//header('Location:qwerty.php');
	//}
	//else
		//echo "your username or password is incorrect";
//}
//else{
//	echo "username doesnt exist";
//}

//echo "</table>";
//mysqli_close($con);
//}
if(isset($_POST['submit2'])&&$_SERVER["REQUEST_METHOD"] == "POST")
{
	header('Location:signup.php');
}
?>

<!-- Navbar--> 
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TEAM</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGIN</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens--> 
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large">TEAM</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large">LOGIN</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
 
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
   <div class="mySlides w3-display-container w3-center">
    <img src="try.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>EASY PARKING</h3>
      <p><b>We know how important is your booking</b></p>   
    </div>
  </div>
   <div class="mySlides w3-display-container w3-center">
    <img src="back2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>EASY PARKING</h3>
      <p><b>We know how important is your booking</b></p>    
    </div>
  </div>

 
 
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">OUR TEAM</h2>
    <p class="w3-opacity"><i>easy parking website</i></p>
    <p class="w3-justify">We have created the website to book parking space while they go to theatres easily.Your safety is our assurance.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p><b>AVINASH</b></p>
        
</div>
      <div class="w3-third">
        <p><b></b></p>
       
      </div>
      <div class="w3-third">
        <p><b>SAILESH</b></p>
        
<br>
      
      </div>
<div>
 <p class="w3-justify" style="align:center"}> We would like  to specially thank <b>dheeraj kulakarni</b> for helping us in this project. </p>
</div>
    </div>
  </div>

 
 <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">LOGIN</h2>
      <p class="w3-opacity w3-center"><i>Thanks for supporting us</i></p><br>

     <table align="center"  width="500px" height="300px">


         <form method="post" action="<?php $_PHP_SELF ?>">
       <tr>
       <td><label for="usernmae"  ><font color="#F6F6F6 " >Username:</font></label></td>
      <td><input type="text" name="username" class="username" ></td>
       <td> <span class="error"> <?php// echo $username;?></span>
       </td>
       </tr>
      <tr>
       <td><label for="password"><font color="#F6F6F6 "> Password :</font></label></td>
       <td><input type="password" name="password" class="username"></td>
      <td><span class="error"></span></td>
      </tr>
      <tr>
      <td><input type="submit"  class="w3-button w3-black w3-margin-bottom" name="submit" value="SignIn"></td>
	  <!--<td><input type="submit"   name="submit" value="SignIn"></td>-->
	 
	 <td><input type="submit"  class="w3-button w3-black w3-margin-bottom"  name="submit2" value="SignUp"></td>
	 
	 
	
     </tr>

      </form>
	  </table>
	  
	  
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
         
          <div class="w3-container w3-white">
            <p><b>VENUS</b></p>
            <p class="w3-opacity">3 Shows/day</p>
            <ul><li>9:00AM to 12:00AM</li><li>2:00PM TO 5:00PM</li><li>6:00PM TO 9:00PM</li></ul>
            
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          
          <div class="w3-container w3-white">
            <p><b>GALAXY</b></p>
			<p class="w3-opacity">3 Shows/day</p>
             <ul><li>9:45AM to 12:45AM</li><li>2:45PM TO 5:45PM</li><li>6:00PM TO 9:00PM</li></ul>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
    
          <div class="w3-container w3-white">
            <p><b>VISHNU</b></p>
            <p class="w3-opacity">3 Shows/day</p>
            <ul><li>9:30AM to 12:30AM</li><li>2:30PM TO 5:30PM</li><li>6:30PM TO 9:30PM</li></ul>
           
          </div>
        </div>
      </div>
      </div>
	 </div>
	  
<!-- CONTACT -->
 
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Thanks for supporting us</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Easy Parking,Vellore<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 9995626358<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: vit@gmail.com<br>
      </div>
     
    </div>
  </div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 
</footer>

<script>
// Automatic Slideshow - change image every 2 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
