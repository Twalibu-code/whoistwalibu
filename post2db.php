<?php

// Step1: establishment mysqli connection
$connection = mysqli_connect("localhost","root","","myDatabase");

// Step2: check if the connection is established
if($connection === false){
   die("ERROR: Could not connect".mysqli_connect_error());
}

// Step3: get form values
   $firstName = $_POST['fName'];
   $middleName =$_POST['mName'];
   $surName = $_POST['sName'];
   $userName = $_POST['uName'];
   $password = $_POST['pWord'];
   $email = $_POST['email'];
   $mobile = $_POST['number'];
   $facebook = $_POST['fb'];
   $twitter = $_POST['twt'];
   $instagram = $_POST['ing'];

// Step4: attempt to insert data to the database
$dataInsert = " INSERT INTO registered( firstName, middleName, surName, userName, password, email, mobile,facebook, twitter, instagram ) 
VALUES ('$firstName','$middleName','$surName','$userName','$password','$email','$mobile','$facebook','$twitter','$instagram')";

// step5: respond if data is successfully inserted to database or not
$QUERY= mysqli_query($connection,$dataInsert);
    if(!$QUERY){
        echo  "ERROR: data not inserted!";
		}
	else{
	    echo "Records inserted Successfully";
	}
	
// step6: close connection
mysqli_close($connection);	

?>	  