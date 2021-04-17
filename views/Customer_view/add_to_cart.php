<?php
	require_once('../../php/session_header.php');
	require_once('../../service/product_service.php');

     $id =$_GET['id'];
     $product_details= getByProductID($id);
?>


<html>
<head>
    <title> Product Details</title>
    <link href="add_to_cart.css" rel="stylesheet">
    </head>
    <body>

      <div class="wrapper">
          <div class="img">
          <img id="img" src="../images/All_Dress_Images/<?=$product_details['product_image']?>" height="100%" width="100%">
          </div>

            <div class="product_name">

              <div class="product_details">
                <h1><b>Product Name:</b></h1>
                <h2><p><?=$product_details['product_name']?></p></h2>
                <p><b>Price:</b>$<?=$product_details['product_price']?></p>
                <input type="button" value="Buy Now">
              </div>

              <div class="product_details">
                <h3><b>Product Details:</b></h3>
                <p><?=$product_details['product_details']?></p>
              </div>

            </div>

          </div>

    </body>
    </html>