<html>
<head>
    <title>Calculation Result</title>
    <style>
        *{
            text-align:center;
            font-size:3vw;
        }
    </style>
</head>
<body>
    <?php
        $value1=$_POST['val1'];
        $value2=$_POST['val2'];
        $operation=$_POST['calc'];
        # test if input is_numeric
        if(is_numeric($value1 )&& is_numeric($value2)){
            # test if calc is not null
            if(!empty($operation)){
                # switch statement for value of calc
                switch($operation){
                    case "add":
                        $result= $value1+$value2;
                        break;
                    case "sub":
                        $result= $value1-$value2;
                        break;
                    case "mul":
                        $result= $value1*$value2;
                        break;
                    case "div":
                        $result= $value1/$value2;
                        break;
                    default:
                        echo"<p>Please Try Again..</p>";
                }
                echo "<p>Calculation result: $result</p>";
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>