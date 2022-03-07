<?php
    session_start();
    if(!isset($_SESSION["Visits"])){
        $_SESSION["Visits"]=0;
    }
    else{
        $_SESSION["Visits"]=$_SESSION["Visits"]+1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Count</title>
    <style>
        *{
            text-align:center;
            font-size:3vw;
        }
    </style>
</head>
<body>

<h1>Hello</h1>
                        <!--display the number of visits in this page-->
<p>You have visited this page <?php echo $_SESSION["Visits"]; ?> times</p>
<p><a href="?reset=true">Reset</a></p><br>
<?php
    if($_SESSION["Visits"]==5){
        //If the count of visits reach 5 display a message "Thank you for visiting the page a lot."
        echo "<p>Thank you for visiting the page a lot.</p>";
    }
    elseif($_SESSION["Visits"]==10){
        //when the count reaches 10 the browser is redirected to a second page (congratulations.php)
        header("Location: congratulations.php");
        exit();
    }       
?>

</body>
</html>

