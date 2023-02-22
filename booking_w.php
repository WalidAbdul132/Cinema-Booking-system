<?php
session_start();
    include("connection.php");  
    $location=$_POST['location'];
    $movie=$_POST['movie'];
    $day=$_POST['day'];
    $time=$_POST['time'];
    $ticket=$_POST['ticket'];
    $email=$_SESSION['email'];


$sql= "INSERT INTO bookings(email,location,movie,day,time,ticket)
VALUES('$email','$location','$movie','$day','$time','$ticket')";

if(mysqli_query($conn, $sql))
{
    header('location:payment.php');
} else {
    echo "error: " . $sql . "<br>" . mysqli_error($conn); 
}
    
    
    
    ?>
    