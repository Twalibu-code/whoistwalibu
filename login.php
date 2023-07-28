<?php

session_start();
$connect = mysqli_connect("localhost","root","","myDatabase");
$Userlogged = $_SESSION['userName'];

$username = $_POST['userName'];
$password = $_POST['password'];

$dataselect = " SELECT userName FROM registered  WHERE userName ='$username'";

$QUERY = mysqli_query($connect , $dataselect);
$fetch_row = mysqli_fetch_assoc($QUERY);

if($fetch_row){

$dataSelect = " SELECT password   FROM registered  WHERE password ='$password'";
$QUERY1 = mysqli_query($connect , $dataSelect);

$fetch_row1 = mysqli_fetch_assoc($QUERY1);
 if($fetch_row1){
    echo "login sucessfull";
header("Location:course.html");

    if(isset($_SESSION['userName'])){
        header("Location:course.html");
       }
    }
    else{
      echo "wrong password";
    }
 }
 
 else{
    echo "USER DOES NOT EXIST";
 }

?>