<?php
    $conn = mysqli_connect("localhost", "root", "", "sparks_bank")
    or die(mysqli_error($conn));
    if(!isset($_SESSION)){
      session_start();
    }
?>
