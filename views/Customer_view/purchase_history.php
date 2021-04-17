<?php
	require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
	$username=$_SESSION['username'];	
	$userinfo = getByName($username);
	$my_id= $userinfo['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Purchase History</title>
</head>
<body background="../images/sky2.jpg" link="#000" alink="#017bf5" vlink="#000">
<body>

	<form>
	<h3 align="center">
				<font face="sans-serif" size="6">VINTAGE</font>
				<br><br>

				<font size="4">
					<a href="home.php">BACK TO HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="#">CONTACT</a>&nbsp;&nbsp;&nbsp;&nbsp;
				</font>
				<br><br>

	</h3>
		
        <h3 align="center">Past Orders</h3>

	<table border="1" height="50x" align="center">
		<tr>
			<td>Product Type</td>
            <td>Product Name</td>
			<td>Product Quantity</td>
            <td>Product Price</td>
            <td>Product Purchased From</td>
            <td>Product Purchase date</td>
            
		</tr>

		<?php  
			$my_purchase = getPurchaseHistory($my_id);
			for ($i=0; $i != count($my_purchase); $i++) {  ?>
		<tr>
			<td><?=$my_purchase[$i]['product_type']?></td>
			<td><?=$my_purchase[$i]['product_name']?></td>
            <td><?=$my_purchase[$i]['product_quantity']?></td>
            <td><?=$my_purchase[$i]['producr_price']?></td>
            <td><?=$my_purchase[$i]['purchase_from']?></td>
            <td><?=$my_purchase[$i]['purchase_date']?></td>
		</tr>

		<?php } ?>
		
	</table>
	</form>
</body>
</html>