<?php
	require_once('../../php/session_header.php');
	require_once('../../service/product_service.php');
?>



<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" href="item_list_style.css">
<title> Products </title>
</head>
<body>
   <h1 id="our">Our Products</h1>
   <div id="info">
   <?php
         $product=getAllProduct(); //from
         for($i=0; $i<count($product);$i++)
         {
        ?> 
       <div class="img"> 
       <a href="add_to_cart.php?id=<?=$product[$i]['id']?>##">  
        <img style:"#333" src="../images/All_Dress_Images/<?=$product[$i]['product_image']?>" >  
        </a>   
           <div class="img-desc">
            <p><b>Price:</b>$<?=$product[$i]['product_price']?></p>
            <button>
            <a href="add_to_cart.php?#<?=$product[$i]['id']?>##"> 
            Add to Cart
            </a>  
            </button>
        </div>
    </div>
    </tr>
    <?php
    }
  ?>
</div>
</body>
</html>

