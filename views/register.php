<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title align="center" >SignUp</title>
</head>
<body>
<script type="text/javascript" src="../Asset/JS/register.js"></script>
	<form id="form" action="../php/regCheck.php" onsubmit="validation()" method="post">
		<fieldset>
			<legend align="center" style="font-size:40px">SignUp</legend>
			<table align="center" height="500" weight="560" bgcolor=pink>
			    <tr>
					<td>Name</td>
					<td><input type="text" id="name" name="name" size="40" onkeyup="nameRemover()" onblur="nameEmpty()" ></td>
				</tr>
				<tr>
				<td></td>
					<td><i id="nameMsg" style="color:white; font-size: 20px;"></i></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email"  id = "email" name="email" size="40" onkeyup="emailRemover()" onblur="emailEmpty()"></td>
				</tr>
				<tr>
				<td></td>
				<td><i id="emailMsg" style="color:red;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				<tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" id="contact_number" name="contact_number" size="40" onkeyup="contactRemover()" onblur="contactEmpty()"></td>
				</tr>
				<tr>
				<td></td>
				<td><i id="contactMsg" style="color:white;font-size: 10px; white-space: pre;"></i></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username"  size="40" onkeyup="unameRemover()" onblur="unameEmpty()"></td>
				</tr>
				<tr>
				<td></td>
				<td><i id="usernameMsg" style="color:white;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				<tr>
				<td>Gender</td>
				<td>
				 <input type="radio" name="gender" id="Male" value="Male" onclick="genderRemover()" onmouseover="genderRemover()" onmouseout="genderEmpty()">male
				 <input type="radio" name="gender" id="Female" value="Female" onclick="genderRemover()" onmouseover="genderRemover()" onmouseout="genderEmpty()">female
				 <input type="radio" name="gender" id="Other" value="Other" onclick="genderRemover()" onmouseover="genderRemover()" onmouseout="genderEmpty()">Other			    
				</td>
				</tr>
				<tr>
				<td></td>
				<td><i id="genderMsg" style="color:white;font-size: 10px; white-space: pre;"></i></td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td><input type="date" id="dob" name="dob" size="1%" onkeyup="dobRemover()" onblur="dobEmpty()" onclick="dobRemover()"></td>
				</tr>
				<td></td>
				<td><i id="dobMsg" style="color:white;font-size: 10px; white-space: pre;"></i></td>
				</tr>
				<tr>
				<tr>
					<td>Address</td>
					<td><input type="text" id="address" name="address" size="40" onkeyup="addRemover()" onblur="addEmpty()"></td>
				</tr>
				<tr>
				<td></td>
				<td><i id="addMsg" style="color:white;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				<td>User Type</td>
				<td>
				<select name="user_type" id="user_type" onkeyup="uTRemover()" onblur="usertypeEmpty()" onclick="uTRemover()">
				<option name="user_type" value=""></option>
				<option name="user_type" value="Customer">Customer</option>
				<option name="user_type" value="Admin">Admin</option>
				<option name="user_type" value="Employee">Employee</option>
				</select >
				</td>
				</tr>
				<tr>
				<td></td>
				<td><i id="utMsg" style="color:white;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password"  size="40" onkeyup="pRemover()" onblur="PEmpty()"></td>
				</tr>
				<tr>
				<td></td>
				<td><i id="passMsg" style="color:white;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" id="confirm_password" name="confirm_password"  size="40" onkeyup="pconRemover()" onblur="PconEmpty()"></td>
				</tr>
				<tr>
				<td></td>
				<td><i id="cpassMsg" style="color:white;font-size: 15px; white-space: pre;"></i></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit" ></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>