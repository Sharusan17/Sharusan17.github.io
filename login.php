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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      $email =  $_POST["email"];
      $_SESSION['email'] = $_POST["email"];
      $pass1 = $_POST["password"];
      
      $sql =  "SELECT * FROM USERS  WHERE email='$email' AND password='$pass1' ";

      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass1) {
                header("Location: addblog.html");
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username; 
            }
            else{
                header("Location: login.html");
            }
        }
        else{
            header("Location: login.html");
        }
    }   
?>

</body>
</html>