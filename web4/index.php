<?php
// set cookies
//when the user submits the form with both "username" and "password" input fields completed.
if(!empty($_POST['username']) && !empty($_POST['password'])){
    session_start();
    //creates a cookie called "auth"
    $_SESSION["cookie name"] = "auth";
    //with a <u>value of "ok"
    setcookie($_SESSION["cookie name"], "ok", time() + (86400 * 30), "/");
    //The browser is redireced to a second page (loggedin.php)
    header("Location: loggedin.php");
    exit();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" value="Log Me In">
    </form>
</body>
</html>