<?php
// session_start(); 
// if(empty($_SESSION["username"])) 
// {
// header("Location: ../../control/login.php"); // Redirecting To Home Page
// }
require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
	$userinfo = getByName($_SESSION['username']);

?>


<!DOCTYPE html>
<html>
<body background="../images/sky2.jpg" link="#000" alink="#017bf5" vlink="#000">
    <h3 align="center">
		<font face="sans-serif" size="6">VINTAGE</font>
	    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<font face="sans" size="4">
			<a href="../index.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">BLOG</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">CONTACT</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="../../php/logout.php">LOGOUT</a>
		</font>
	</h3>
            <p align="center">
                <font face="sans-serif" size="4" >HELLO,</font>&nbsp; 
                <?php
                    $a1=$userinfo["name"];
                    echo "<font size='5pt'>$a1</font>";
                ?>
                <br><br>
                <?php
                    echo "<font size='5pt'>WELCOME</font>";
                ?>
                <br>
            </p>

            <div>
                <p align="center">
                    <br><br><br><br><br>
				    <a href="adminprofile.php"><font size="5" >| PROFILE |</font></a>
                    <br><br><br>
                    <a href="empinfo.php"><font size="5" >| EMPLOYEE INFORMATION |</font></a>
                    <br><br><br>
                    <a href="Inventoryinfo.php"><font size="5" >| INVENTORY INFORMATION |</font></a>
                    <br><br><br>
                    <a href="../Customer_view/purchase_history.php"><font size="5" >| SALE HISTORY |</font></a>
			    </p>
            </div>




</body>
</html>

<?php


?>   


