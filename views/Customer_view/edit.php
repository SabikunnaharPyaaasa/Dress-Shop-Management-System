<?php
	require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
	$username=$_SESSION['username'];
	$userinfo = getByName($username);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body background="../images/sky2.jpg" link="#000" alink="#017bf5" vlink="#000">

<h3 align="center">
				<font face="sans-serif" size="6">VINTAGE</font>
				<br><br>

				<font size="4">
					<a href="home.php">BACK TO HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="#">CONTACT</a>&nbsp;&nbsp;&nbsp;&nbsp;
				</font>
				<br><br>

			</h3>

	<form action="../../php/userController.php" method="post">
		<fieldset>
			<legend>Edit User</legend>
			<table align='center'>
				<tr>
				
					<td>Name</td>
					<td><input type="text" name="name" value="<?=$userinfo['name']?>"></td>
				</tr>

				<tr>
				    <td>Address</td>
				    <td><input type="text" name="address" value="<?=$userinfo['address']?>"></td>
			   </tr>

			   <tr>
				    <td>Contact Number</td>
				    <td><input type="text" name="contact_number" value="<?=$userinfo['contact_number']?>"></td>
			   </tr>

				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$userinfo['password']?>"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="text" name="confirm_password" value="<?=$userinfo['confirm_password']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$userinfo['id']?>">
						<input type="submit" name="edit" value="Update"> 
						<a href="customerhome.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>