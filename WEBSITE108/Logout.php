<?php
   // Starting a session for user authentication
   session_start();

   // Checking if the session variable "sess_user" is set
   if(isset($_SESSION["sess_user"])){
       // If set, destroy the session and redirect to the login page
       session_destroy();
       header('location: Login.php');
   }
   else{
       // If not set, redirect to the home page
       header('location: home.html');
   }
?>
