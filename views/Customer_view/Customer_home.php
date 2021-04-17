<?php
	require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
	$userinfo = getByName($_SESSION['username']);
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
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
</h2>
<h2 align='center'> Welcome <?=$userinfo['name']?></h2>
	<h3 align='center'>
     <a href="../../views/Customer_view/customerprofile.php">Profile Picture</a> |
	<a href="../../views/Customer_view/edit.php">Edit User</a> |
	<a href="../../views/Customer_view/purchase_history.php">My Purchase History</a> |
	<a href="../../views/Customer_view/complain.php">Complain</a> |
	<a href="../../views/Customer_view/item_list.php">Product List</a> |
	<a href="../../php/logout.php">Logout</a> 

	<br>


</body>
</html>