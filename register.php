<link rel="stylesheet" type="text/css" href="set.css">

<?php
	$firstname = $_POST['givenname'];
	$middlename = $_POST['midname'];
	$lastname = $_POST['familyname'];
	$Month = $_POST['month'];
	$Day = $_POST['day'];
	$Year = $_POST['year'];
	$Gender = $_POST['gender'];
	$course = $_POST['program'];
	$status = $_POST['studenttype'];
	$place = $_POST['Address']	
?>
<html>
<strong>Firstname: </strong><code><?php echo $firstname; ?></code><br />
<strong>Middlename: </strong><code><?php echo $middlename; ?></code><br />
<strong>Lastname: </strong><code><?php echo $lastname; ?></code><br />
<strong>Birthday: </strong><code><?php echo $Month, " ",$Day,"," ," ", $Year ; ?></code><br />
<strong>Gender: </strong><code><?php echo $Gender; ?></code><br />
<strong>Program:  </strong><code><?php echo $course; ?></code><br />
<strong>Student Type: </strong><code><?php echo $status; ?></code><br />
<strong>Address: </strong><br><pre><?php echo $place; ?></pre><br />