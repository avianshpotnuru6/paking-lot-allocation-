
<html>
<head>
<title>Easy Parking</title>
</head>

<body bgcolor="#2B2B2B">

<form method="POST" action="<?PHP $_PHP_SELF ?>"  align="center">
<!--<input type="radio" name="slot" value="A">
<input type="radio" name="slot" value="B">
<input type="radio" name="slot" value="C">
<input type="radio" name="slot" value="D">
<input type="radio" name="slot" value="E">
<input type="radio" name="slot" value="F">
-->

<font color="#F6F6F6 " >
BOOK THE SLOT: <br><br>
<b>lane 1</b>
<input type="radio" name="slot1" value="1" > slot 1&nbsp;
&nbsp;&nbsp;&nbsp;<input type="radio" name="slot1" value="2" > slot 2&nbsp;
&nbsp;&nbsp;&nbsp;<input type="radio" name="slot1" value="3" > slot 3&nbsp;
&nbsp;&nbsp;&nbsp;<input type="radio" name="slot1" value="4" > slot 4&nbsp;
&nbsp;&nbsp;&nbsp;<input type="radio" name="slot1" value="5" > slot 5&nbsp;
&nbsp;&nbsp;&nbsp;<input type="radio" name="slot1" value="6" > slot 6&nbsp;
</br></br></br></br>
&nbsp;&nbsp;<b>lane 2</b>
&nbsp;<input type="radio" name="slot1" value="7" > slot 7&nbsp;
&nbsp;&nbsp;&nbsp;<input type="radio" name="slot1" value="8" > slot 8&nbsp;
&nbsp;&nbsp;&nbsp;<input type="radio" name="slot1" value="9" > slot 9&nbsp;
&nbsp;&nbsp;&nbsp;<input type="radio" name="slot1" value="10" > slot 10&nbsp;
&nbsp;<input type="radio" name="slot1" value="11" > slot 11&nbsp;
&nbsp;<input type="radio" name="slot1" value="12" > slot 12&nbsp;
</br></br></br></br> &nbsp;&nbsp;<b>lane 3 </b>
&nbsp;<input type="radio" name="slot1" value="13" > slot 13&nbsp;
&nbsp;<input type="radio" name="slot1" value="14" > slot 14&nbsp;
&nbsp;<input type="radio" name="slot1" value="15" > slot 15&nbsp;
&nbsp;<input type="radio" name="slot1" value="16" > slot 16&nbsp;
&nbsp;<input type="radio" name="slot1" value="17" > slot 17&nbsp;
&nbsp;<input type="radio" name="slot1" value="18" > slot 18&nbsp;
</br></br></br></br>&nbsp;&nbsp;<b>lane 4</b>
&nbsp;<input type="radio" name="slot1" value="19" > slot 19&nbsp;
&nbsp;<input type="radio" name="slot1" value="20" > slot 20&nbsp;
&nbsp;<input type="radio" name="slot1" value="21" > slot 21&nbsp;
&nbsp;<input type="radio" name="slot1" value="22" > slot 22&nbsp;
&nbsp;<input type="radio" name="slot1" value="23" > slot 23&nbsp;
&nbsp;<input type="radio" name="slot1" value="24" > slot 24&nbsp;

<br>
<br>
<br>
SELECT THE PLACE:
<select name="select">
<option value="SHILAMBHU">SHILAMBHU</option>
<option value="VENUS">VENUS</option>
<option value="ASCARS">ASCARS</option>
<option value="RAGHAVENDRA">RAGHAVENDRA</option>
</select>
<br>
<br>
<br>
SELECT TYPE:

<select  name="type">
<option value="1">Two Wheeler</option>
<option value="2">Four Wheeler</option>
<option value="3">Other</option>``````
</select>
<br>
<br>
<br>
SELECT TIME :
<select  name="time">
<option value="4">1 hour</option>
<option value="5">2 hours</option>
<option value="6">3 hours</option>
<option value="7">4 hours</option>
<option value="8">Half day</option>
<option value="9">Full day</option>
</select>
<br>
<br>
<input type="submit" name="submit" value="book">
<input type='submit' name='submit3' value='cancel'>


</font>
</form>
<?php
if(isset($_POST["submit"])&&$_SERVER["REQUEST_METHOD"]=="POST") {
	$valid=1;
	$slot=$_POST["slot1"];
     $conn = mysqli_connect('127.0.0.1','root','');
 if(! $conn ) {
	 echo "couldnt connect to the database";
 die('Could not connect: ' . mysqli_error());
 //$valid=0;
 }
 $sql = "INSERT INTO slot ". "(book) ".
"VALUES('$slot')";
 mysqli_select_db($conn,'parking');
 $retval = mysqli_query($conn, $sql);
 if(! $retval ) {
 //die('Could not enter data: ' . mysqli_error($conn));
 die('sorry slot you took has already been booked');
 //$valid=0;
 }
	  if($valid==1)
	  {
	  include('print.php');
	  //$sql = "INSERT INTO slot ". "(book) "."VALUES('$slot')"
	  //echo "<form method='POST' action='test1.php'  align='center'>";
	  //echo "<input type='submit' name='submit3' value='cancel'>";
	  //echo "</form>"; 
	  //header('Location: print.php');
	  }
  mysqli_close($conn);

 
}
if(isset($_POST["submit3"])&&$_SERVER["REQUEST_METHOD"]=="POST")
{
	//$valid=1;
	$slot=$_POST["slot1"];
     $conn = mysqli_connect('127.0.0.1','root','');
 if(! $conn ) {
	 echo "couldnt connect to the database";
 die('Could not connect: ' . mysqli_error());
 }
 $sql = "DELETE FROM slot WHERE book = '$slot'" ;
 mysqli_select_db($conn,'parking');
 $retval = mysqli_query($conn, $sql);
 if(! $retval ) {
 //die('Could not enter data: ' . mysqli_error($conn));
 die('sorry slot you took has already been booked');
 }
 else
 {
	 //$valid=0;
	 echo "<p><font color='#C63D0F'>Congratulations you have succesfully cancelled the ticket</font></p>";
 }
  mysqli_close($conn);
 }
	
?>



</body>
</html>