<?php
if(isset($_POST['submit'])){
 //echo "prev", print_r($_FILES["myfile"]["name"]), "/prev";
 //print_r($_FILES['myfile']);


 $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['myfile']['name']);
$uploadOk = 1;
echo $target_file;
}
?>