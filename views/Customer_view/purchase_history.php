<?php
	require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
	require_once('../../service/product_service.php');
	$username=$_SESSION['username'];	
	$userinfo = getByName($username);
	$my_id= $userinfo['id'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" href="purchase_history.css">
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
<div class="wrapper">
<?php  
			$my_purchase = getPurchaseHistory($my_id);
			for ($i=0; $i != count($my_purchase); $i++) { 
				$product_id=$my_purchase[$i]['product_id'];
				$product_info=  getByProductID($product_id);
			?>
			
	<div class="purchase_form">
	<div class="img"><img src="../images/All_Dress_Images/<?=$product_info['product_image']?>" height="450px" width="330px"></div>

	<div class="purchase_details">
	<h2>Order Purchased From <?=$my_purchase[$i]['order_from']?>

	<h3>Customer Name:</h3>
	<h4><?=$my_purchase[$i]['customer_name']?></h4>

	<h3>Purchased Date:</h3>
	<h4><?=$my_purchase[$i]['order_date']?></h4>

	<h3>Contact Number:</h3>
	<h4><?=$my_purchase[$i]['contact_number']?></h4>

	<h3>Order Receive Address:</h3>
	<h4><?=$my_purchase[$i]['address']?></h4>
	</div>
    </div>
	<?php }?>
</div>
</form>
</body>
</html>