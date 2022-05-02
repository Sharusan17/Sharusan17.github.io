<?php
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ecs417";


    // Creates connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Checks connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $title =  $_POST["title"];
      $message = $_POST["messagebox"];
      $date = date("d M Y");
      $time = date("H:i e");

      echo $title;


      $sql =  "INSERT INTO `POST`(`title`, `message`, `date`, `time`) VALUES ('$title','$message','$date','$time') ";

      if($conn->query($sql) === TRUE){
          header("location: blog.php");
      } else{
          echo "Error: " . $sql . "<br>" . $conn->error;
          header("location: addblog.html");
      }

      $conn->close();
    }   
?>