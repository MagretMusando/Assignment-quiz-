<?php
$servename= "localhost";
$studentname= "root";
$admnumber= "";
$password= "";
$DATABASE_NAME= "campus";
$conn = new mysqli($servename, $studentname, $admnumber, $password, $DATABASE_NAME);
if($conn-> connect_error)
{
   die("connection failed: ".$conn->connect_error); 
    }else{
    echo "connection successful";
}

?>
