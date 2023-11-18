<?php 
include_once('connect_db.php');

$email =$_POST["email"];
$pass_wordl =$_POST["pass_word"];
$address1 =$_POST["address1"];
$address2 =$_POST["address2"];
$city =$_POST["city"];
$state =$_POST["state"];
$zip =$_POST["zip"];
$chock_me =$_POST["chock_me"];
$date_time =$_POST["date_time"];

$sql ="";

if (mysqli_query($conn, $sql)) { 
    echo "New record created successfully";
} else {
    
}
?>
