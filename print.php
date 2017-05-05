 <html>
<body>
<?php

 if(isset($_POST["submit2"])&&$_SERVER["REQUEST_METHOD"]=="POST")
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
	 header('Location:new.php');
 }
  mysqli_close($conn);
 }

?>

<div id="printableArea">
<table bgcolor="#F6F6F6" align="center">
<tr>
<td>You booked ticket at : </td>
<td><?php echo $_POST["select"];?></td>
</tr>
<tr>
<td>Your slot is : </td>
<td><?php echo $_POST["slot1"];?></td>
</tr>

<tr>
<?php
if($_POST["type"]=="1")
{   
    if($_POST["time"]=="4")
	{
	echo "<td>your charge is</td>";
	echo "<td>20RS</td>";
	}
	else if($_POST["time"]=="5")
	{
	echo "<td>your charge is</td>";
	echo "<td>30RS</td>";
	}
	else if($_POST["time"]=="6")
	{
	echo "<td>your charge is</td>";
	echo "<td>40RS</td>";
	}
	else if($_POST["time"]=="7")
	{
	echo "<td>your charge is</td>";
	echo "<td>50RS</td>";
	}
	else if($_POST["time"]=="8")
	{
	echo "<td>your charge is</td>";
	echo "<td>80RS</td>";
	}
	else 
	{
	echo "<td>your charge is</td>";
	echo "<td>100RS</td>";
	}
}
else if($_POST["type"]=="2")
{   
	 
    if($_POST["time"]=="4")
	{
	echo "<td>your charge is</td>";
	echo "<td>40RS</td>";
	}
	else if($_POST["time"]=="5")
	{
	echo "<td>your charge is</td>";
	echo "<td>50RS</td>";
	}
	else if($_POST["time"]=="6")
	{
	echo "<td>your charge is</td>";
	echo "<td>60RS</td>";
	}
	else if($_POST["time"]=="7")
	{
	echo "<td>your charge is</td>";
	echo "<td>70RS</td>";
	}
	else if($_POST["time"]=="8")
	{
	echo "<td>your charge is</td>";
	echo "<td>100RS</td>";
	}
	else 
	{
	echo "<td>your charge is</td>";
	echo "<td>130RS</td>";
	}
}
else 
{
	if($_POST["time"]=="4")
	{
	echo "<td>your charge is</td>";
	echo "<td>50RS</td>";
	}
	else if($_POST["time"]=="5")
	{
	echo "<td>your charge is</td>";
	echo "<td>60RS</td>";
	}
	else if($_POST["time"]=="6")
	{
	echo "<td>your charge is</td>";
	echo "<td>70RS</td>";
	}
	else if($_POST["time"]=="7")
	{
	echo "<td>your charge is</td>";
	echo "<td>80RS</td>";
	}
	else if($_POST["time"]=="8")
	{
	echo "<td>your charge is</td>";
	echo "<td>120RS</td>";
	}
	else 
	{
	echo "<td>your charge is</td>";
	echo "<td>150RS</td>";
	}
	
	
}
	
?>
</tr>
</table>
</div>
<button name="print" onclick="printDiv('printableArea')" align="center">print</button>
<form method="POST" action="<?PHP $_PHP_SELF ?>"  align="center"> 
<input type="submit" name="submit2" value="cancel">
</form>


<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

</body>
</html>