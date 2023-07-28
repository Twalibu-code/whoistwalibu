<?php
$connect = mysqli_connect("localhost","root","","myDatabase");

$course = $_POST['course'];
$coursecode = $_POST['coursecode'];
$description = $_POST['description'];
$department= $_POST['department'];
$grade = $_POST['grade'];
$year = $_POST['year'];


$dataInsert = " INSERT INTO course (course  ,coursecode ,description,department, grade,year ) 
VALUES ('$course', '$coursecode','$description','$department','$grade','$year')";

$QUERY = mysqli_query($connect , $dataInsert);

if(!$QUERY){
    echo "Sorry! data not inserted";
}
else{

    echo "Succesfully inserted";
}

?>