<?php
    // that seeks the cookie
    if(isset($_COOKIE)) {
        session_start();
        // test cookies if is set, display if set
        echo "Cookie name: ".$_SESSION["cookie name"]."<br>";
        echo "Cookie value: ".$_COOKIE[$_SESSION["cookie name"]]."<br>";
    } else {
        //If that page does not find the cookie, the browser is redirected to the log-in page
        header("Location: index.php");
        exit();
      }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
    <style>
        *{
            text-align:center;
            font-size:2vw;
        }
    </style>
</head>
<body>
    You are logged in and can access all pages on this web site. <br> <a href="anotherpage.php">
    <br>Visit another page on this site?</a>
</body>
</html>