<?php
 session_start();
include("../connection.php");

    
if(isset($_POST['submit'])){
          $sql = "DELETE FROM Bookings";
          $result = mysqli_query($conn, $sql);
      if($result)
      {
           header('location: ../ticket.php');
      } else {
          echo "damn bro" .  "<br>" . mysqli_error($conn); 
      }
        
} else {
          echo "error: " . "<br>" . mysqli_error($conn); 
}
?>