<?php
    $name = "supercookie";
    $value = "Do you like cheese?";
    $expiration = time() + (60*60*24*7); // this equates to a week from the current time
    setcookie($name, $value, $expiration);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>test</h1>
    <?php
        if (isset($_COOKIE['supercookie'])){
            $cookieVal = $_COOKIE['supercookie'];
            echo $cookieVal;
        } else echo "cookie not set";
    ?>
</body>
</html>