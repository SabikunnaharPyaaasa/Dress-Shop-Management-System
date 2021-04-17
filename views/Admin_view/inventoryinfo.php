<?php
    $xml=simplexml_load_file("data.xml") or die("Error: Cannot create object");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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


    <div>
        <h3 align='center'>INVENTORY</h3>
        <h4 align='center'>Summery of Month February, 2021</h4><br>
        
        <table align="center" border="1">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Unit Price</th>
                    <th>Recieved Unit</th>
                    <th>Sold Unit</th>
                    <th>Available Unit</th>
                <tr>
            <thead>
            <tbody>
                <?php foreach ($xml->item as $itm) : ?>
                <tr>
                    <td><?php echo $itm->name; ?></td>
                    <td><?php echo $itm->cost; ?></td>
                    <td><?php echo $itm->recieved; ?></td>
                    <td><?php echo $itm->sold; ?></td>
                    <td><?php echo $itm->available; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <div>
    </body>
</html>

