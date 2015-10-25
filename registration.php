<html><head><h2><center>Student Registration Form</center></h2></head>
<link rel="stylesheet" type="text/css" href="set.css">
<body>
	<div>
		<center>
			<form action = "register.php" method = "POST"><br />
	<table border = "2.50" cellpadding="7" cellspacing="6">
		<tr>
			<td>First Name</td>
			<td>Middle Name</td>
			<td>Last Name</td>
		</tr>

		<tr>
			<td><input type = "text" name = "givenname"></td>
			<td><input type = "text" name = "midname"></td>
			<td><input type = "text" name = "familyname"></td>
		</tr>

		<tr>
			<td>Gender</td>
			<td><input type = "radio" name="gender" value="Female"> Female</td>
        	<td><input type = "radio" name="gender" value="Male"> Male</td>
		</tr>

		<tr>
			<td colspan="3">Birthday</td>
		</tr>

		<tr>
			<td>Month&nbsp;<select name = "month">
			<option value=""></option>
			<option value="January">January</option>
	    	<option value="February">February</option>
			<option value="March">March</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="August">August</option>
			<option value="September">September</option>
			<option value="October">October</option>
			<option value="November">November</option>
			<option value="December">December</option>
			</select>
			</td>
			<td>Day <select name = "day">
			<option value=""></option>
			<?php 
			for ($s=1; $s <= 31 ; $s++):
			?>
			<option value="<?php echo $s; ?>"><?php echo $s; ?></option>

			<?php endfor; ?>
			</select>
			</td>

			<td>Year <select name = "year">
			<option value=""></option>
			<?php 
			for ($i=2016; $i >= 1920 ; $i--):
			?>
			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>

			<?php endfor; ?>
			</select>
			</td>
		</tr>

		<tr>
			<td>Program</td>
			<td colspan ="2">
			<select name = "program">	
			<option value=""></option>>
			<option value="Bachelor of Arts in Broadcasting">Bachelor of Arts in Broadcasting</option>
			<option value="Bachelor of Science in Information System">Bachelor of Science in Information System</option>
			<option value="Bachelor of Science in Accountancy">Bachelor of Science in Accountancy</option>
			<option value="Bachelor of Science in Accounting Technology">Bachelor of Science in Accounting Technology</option>
			<option value="Bachelor of Science in Social Works">Bachelor of Science in Social Works</option>		
			<option value="Office Management">Office Management</option>
			<option value="International Cookery">International Cookery</option>
			<option value="Mass Communication Technology">Mass Communication Technology</option>
			<option value="Associate in Computer Technology">Associate in Computer Technology</option>
			</select>
		</tr>

		<tr>
			<td colspan="3">Student Type</td>
		</tr>

		<tr>
			<td colspan="3"><input type = "radio" name="studenttype" value="Full Scholar"> Full Scholar<br>
			<input type = "radio" name="studenttype" value="Partial Scholar"> Partial Scholar<br>
			<input type = "radio" name="studenttype" value="Payee"> Payee</td>
		</tr>

		<tr>
			<td colspan="3">Address</td>
		</tr>

		<tr>
			<td colspan="3"><textarea name="Address"cols= "80" rows= "5" placeholder="K-56 Bagong Pag-asa Subd. Apalit, Pampanga." value="Address"></textarea></td>
		</tr>

	</table>
		<button = "submit" value = "Submit Registration">SUBMIT</button>
		<button type="reset" value="Reset">&nbsp;&nbsp;&nbsp;CLEAR&nbsp;&nbsp;&nbsp;</button>
				</form>
			</center>
		</div>
	</body>
</html>