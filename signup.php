
<!DOCTYPE HTML>
<html>
<head><title>Easy Parking</title>
<style>
.error {color: red;}
table{
	padding-top:100px;
}
</style>
</head>
<body  bgcolor="#2B2B2B">
<?php
$valid=1;
$nameErr = $passwordErr = $phnoErr = $emailErr = "";
$name = $pass = $phno = $email = "";
if(isset($_POST["submit"])&&
$_SERVER["REQUEST_METHOD"]=="POST") {
$name = test_input($_POST["name"]);
$password= test_input($_POST["regno"]);
$phno = test_input($_POST["phno"]);
$email = test_input($_POST["email"]);
 if (empty($name)) {
$nameErr = "Name is required";
$valid=0; }
 else {
 if (!preg_match("/^[a-zA-Z]*$/",$name)) {
 $nameErr = "Only alphabets are allowed";
 $valid=0;}
}
 if (empty($password)) {
 $passwordErr = "password is required";
 $valid=0;}

 if (empty($phno)) {
$phnoErr = "Ph no is required";
$valid=0;} 
 else {
if (!preg_match("/[0-9]{10}/",$phno)) {
$phnoErr = "Enter ten digit ph no";
$valid=0;}
}
 if (empty($email)) {
$emailErr = "Email is required";
$valid=0;}
/* else {
if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[az0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$email))
{
$emailErr = "Enter a valid email addr";
$valid=0;}*/

 if($valid==1) {
	 
	 if(isset($_POST['submit'])) {
 $conn = mysqli_connect('127.0.0.1','root','');
 if(! $conn ) {
 die('Could not connect: ' . mysqli_error());
 }
  $sql = "INSERT INTO details ". "(name,password,phno,email) ".
"VALUES('$name','$password','$phno','$email')";
 mysqli_select_db($conn,'parking');
 $retval = mysqli_query($conn, $sql);
 if(! $retval ) {
 die('Could not enter data: ' . mysqli_error($conn));
 }
 $sql = "INSERT INTO login ". "(username,password) ".
"VALUES('$name','$password')";
 echo "Entered data successfully\n";

 mysqli_select_db($conn,'parking');
 $retval = mysqli_query($conn, $sql);
 if(! $retval ) {
 die('Could not enter data: ' . mysqli_error($conn));
 }
  mysqli_close($conn);
 }
 
header('Location:new.php');
exit();
}
}
function test_input($data) {
$data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
?>

<!--<p><span class="error">* required field.</span></p>-->
<table align="center" height="300px" width="500px">
<form method="post" action="signup.php" >
<tr>
<td> <font color="#F6F6F6 " >Name :</font> </td><td><input type="text" name="name" value="<?php echo $name?>">
 <span class="error">* <?php echo $nameErr;?></span></td></tr>
 <tr>
 
 
 <tr><td><font color="#F6F6F6 " >password:</font></td> <td><input type="password" name="regno" value="<?php echo $pass ?>">
 <span class="error">* <?php echo $passwordErr;?></span></td></tr>
 <tr>
 
 <tr><td><font color="#F6F6F6 " >Ph no :</font></td> <td><input type="text" name="phno" value="<?php echo
$phno?>">
 <span class="error">* <?php echo $phnoErr;?></span></td></tr>
 <tr>
 
 </tr>
 <tr>
 <td><font color="#F6F6F6 " >Email : </font></td><td><input type="email" name="email" value="<?php
echo $email?>">
 <span class="error">* <?php echo $emailErr;?></span></td>
 </tr>
 <tr><td><input type="submit" name="submit" value="Submit"></td></tr>
</form>

</body>
</html>