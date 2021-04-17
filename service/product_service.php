<?php
require_once('userService.php');
// $host 	= "127.0.0.1";
// $dbuser = "root";
// $dbpass	= "";
// $dbname	= "shop";

// function dbConnection(){

//     global $host;
//     global $dbuser;
//     global $dbpass;
//     global $dbname;

//     return $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
// }

function getAllProduct(){
    $conn = dbConnection();

    if(!$conn){
        echo "DB connection error";
    }

    $sql = "select * from product_list";
    $result = mysqli_query($conn, $sql);
    $users = [];

    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }

    return $users;
}

function getByProductID($id){
    $conn = dbConnection();

    if(!$conn){
        echo "DB connection error";
    }

    $sql = "select * from product_list where id={$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function complainDelete($complain_id){
    $conn = dbConnection();
    if(!$conn){
        echo "DB connection error";
    }

    $sql = "delete from  complain where id={$complain_id}";

    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

?>