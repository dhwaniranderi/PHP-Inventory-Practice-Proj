<?php

   $servername = "localhost:3306";
   $usernameDB = "root";
   $passwordDB = "";
   $dbname = "final_exam";

   // Create connection
   $conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

   //check connection
   if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_errror);
   }
?>