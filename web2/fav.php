<html>
<head><title>Your Favorite</title></head>
<body>
    <?php

        $username = isset($_POST['username']) ? $_POST['username']: '';
        $color = isset($_POST['color']) ? $_POST['color']: '';
        $dish = isset($_POST['dish']) ? $_POST['dish']: '';

        if(!empty($username)){
            if (!empty($color) && !empty($dish)) {
                echo "<h1> Thank You For Your Selection, {$username} 
                <br> You Really Enjoyed {$dish}
                <br> - Especially With A Nice {$color} Wine. </h1>";
            }
            else{ 
                echo "<h1> Dear Customer, Please Choose Your Favorite Wine and Enter Your Favorite Dish. Thank You! </h1>";
            }
        }
            else{
                echo "<h1> Dear Customer, Please Enter Your Name. Thank You!</h1>";
        }
    ?>
</body>
</html>