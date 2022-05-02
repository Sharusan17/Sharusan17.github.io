<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="1reset.css">
    <link rel="icon" href="images/sharu_favicon.png">
    <link rel="icon" type="images/png" href="images/sharu_favicon.png"/>
    <link rel="shortcut icon" type="images/png" href="Link to the image"/>

</head>
<body>
    <header>
        <nav class="navgroup">
            <ul class="page_link">
                <li id="thispage"> <a href="index.php"> Home </a></li>
                <li > <a href="about.html"> About Me </a></li>
                <li > <a href="skill.html"> Skills </a></li>
                <li > <a href="portfolio.html"> Portfolio </a></li>
                <li > <a href="contact.html"> Contact </a></li>
                <li > <a href="blog.php"> Blog </a></li>
            </ul>
        </nav>
    </header>


    <article>
        <hgroup class="introduce">
            <h1 id="name">Sharusan Hariharan</h1>
            <h3 id="slogan">Just A Computer Science Student</h3>
        </hgroup>
        

        <figure>
            <img id="profile_img" src="images/Sharusan Pic.jpg" alt="Sharusan Profile Image" width="390em" height="500em">
            <div id="background_img"></div>
        </figure>

        <div class="exploremore">
            <a  id="play_link" href="about.html"> Explore More <img id="play_logo" src="images/play_logo.png" width="30pt">  </a>

        </div>


    </article>

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