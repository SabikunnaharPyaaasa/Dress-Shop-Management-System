<?php
	require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
	require_once('../../service/product_service.php');

	$username=$_SESSION['username'];
    //echo $username;
	
	$userinfo = getByName($username);
	$my_id= $userinfo['id'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" href="complain.css">
	<title>Complain</title>
</head>
<body>

	<form action="../../php/userController.php" method="post">
	<h2 align="center">My Complain List</h2>
	<div class="wrapper">
          <div class="complain_form">
			<table >
				<tr>
					<td>
						<h2>Add your complain here....</h2>
                    </td>
                </tr>
				<tr>
		     		<td><h3>Complain type</h3></td>
				</tr>
				<tr>
					<td><input type="text" id="cmp_type" name="complain_type" ></td>
				</tr>
				<tr>
					<td><h3>Complain Description</h3></td>
				</tr>
				<tr>
					<td><textarea type="textarea" id="cmp_des" name="description" width="40x" height="50x"></textarea></td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="user_id" value="<?=$userinfo['id']?>">
						<input type="submit" name="submit_complain" value="Submit"> 
						<a href="Customer_home.php">Back</a>
					</td>
				</tr>
			</table>
		</div>

		
	<div class="product_details">
	    <div class="row">
	          <div class="view_complain">Complain Type
              </div>
              <div class="view_complain">Complain Description
              </div>
              <div class="view_complain">Delete
              </div>
		</div>
		<?php  
			$complain = getComplainById($my_id);
			for ($i=0; $i != count($complain); $i++) {  ?>
		    <div class="database_row">
	          <div class="view_complain"><?=$complain[$i]['complain_type']?>
              </div>
              <div class="view_complain"><?=$complain[$i]['description']?>
              </div>
              <div class="view_complain"><a href="../../php/complainCheck.php?id=<?=$complain[$i]['id']?>"><input type="button" value="Delete"  onclick="alert('Are you want to delete<?=$$complain[$i]['id'];?>')"></a>
              </div>
		    </div>
		<?php }?>
	</div>
</div>
	</form>
</body>
</html>