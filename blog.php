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
    <title>Blog</title>
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="1reset.css">
    <link rel="icon" href="images/sharu_favicon.png">
    <link rel="icon" type="images/png" href="images/sharu_favicon.png"/>
    <link rel="shortcut icon" type="images/png" href="Link to the image"/>

</head>
<body>

    <header>
        <nav class="navgroup">
            <ul class="page_link">
                <li > <a href="index.php"> Home </a></li>
                <li> <a href="about.html"> About Me </a></li>
                <li > <a href="skill.html"> Skills </a></li>
                <li > <a href="portfolio.html"> Portfolio </a></li>
                <li > <a href="contact.html"> Contact </a></li>
                <li id="thispage"> <a href="blog.php"> Blog </a></li>

                

                    <?php
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                            $login_email =  $_SESSION['email'];
                            $sql =  "SELECT firstName FROM USERS  WHERE email='$login_email' ";
                            $result = $conn->query($sql);

                            while($row = $result->fetch_assoc()) {
                                $firstName =  $row["firstName"];
                            }

                            ?>
                    <ul class="blog_link">
                        <li id="addBlog"> <a href="addblog.html"> Add Post</a></li>
                        <li><a href="logout.php"> Logout </a></li>
                    </ul>
                <?php
                    }else{
                        ?>
                        <ul class="blog_link">
                            <li id="loginbtn"> <a href="login.html"> Login </a></li>
                        </ul>
                    <?php
                    }
                    ?>
                </ul>  
            </ul>
        </nav>

        <h2 id="user_name">Welcome 
            <?php
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    echo $firstName;
                }
                else{
                    echo "User";
                } 
            ?>!
        </h2>
    </header>

    <h1 id="Blog_heading"><strong>Sharu</strong>Blog</h1>
    <hr id="bloghead_line">



    <div class="blogcontainer">
            <?php
                $sql = "SELECT * FROM POST ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                ?>

                <table>
                    <th id="blog_title"> <?php echo $row['title'];?></th>
                    <td id="blog_date"> <?php echo $row['date']." ".$row['time'];?></td>
                </tr>
                    <tr>
                        <td id="blog_text"> <?php echo $row['message'];?></td>
                    </tr>
                </table>
                <hr>
                <br>
            <?php
            }
            ?>
        <table>
            <tr>
                <th id="blog_title">The wonderful world of programming</th>
                <td id="blog_date"> 20 March 2022 14:00 UTC</td>
            </tr>
            <tr>
                <td id="blog_text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi ut, sed ullam tenetur obcaecati laborum dignissimos soluta adipisci voluptate neque, repellat cupiditate sequi, doloribus magni nobis voluptatum amet odio! Non.</td>
            </tr>
        </table>

        <hr>

        <hr>

    </div>

    <footer>
        <nav class="socialgroip">
            <ul class="social_link">
                <li> <a  href="https://www.instagram.com/sharisharu12/"> <img src="images/instagram_logo.png" height="20pt"> </a>  </li>
                <li> <a  href="https://twitter.com/sharu178"> <img src="images/twitter_logo.png" height="20pt"> </a>  </li>
                <li> <a  href="https://www.linkedin.com/in/sharusan"> <img src="images/linkedin_logo.png" height="20pt"> </a>  </li>
                <li> <a  href="https://github.com/Sharusan17"> <img src="images/github_logo.png" height="20pt"> </a>  </li>
            </ul>
        </nav>
    </footer>
</body>
</html>