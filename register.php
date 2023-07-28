<?php

$connect = mysqli_connect("localhost","root","","myDatabase");

   $firstName = $_POST["fName"];
   $middleName = $_POST["mName"];
   $surName = $_POST["sName"];
   $userName = $_POST["uName"];
   $password = $_POST["pWord"];
   $email = $_POST["email"];
   $mobile = $_POST["number"];
   $facebook = $_POST["fb"];
   $twitter = $_POST["twt"];
   $instagram = $_POST["ing"];

$dataInsert = " INSERT INTO registerd (firstName,middleName,surName,userName,password,email,number,facebook,twitter,instagram) 
VALUES ('$firstName','$middleName','$surName','$userName','$password','$email','$mobile','$facebook','$twitter','$instagram')";


$QUERY = mysqli_query($connect , $dataInsert);

if(!$QUERY){
    echo "data not inserted";
}
else{

    echo "succesfully inserted";
}









?>