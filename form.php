<?php
    if (isset($_POST["submit"], $_POST["username"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $names = ["Doobs", "Kiwi", "Mom", "Dad"];

        if (in_array($username, $names)){
            echo "Welcome back, " . $username . "!" . "<br>"; 
        } else {
            echo "Please create an account";
        }
    } else {
        echo "The values are not set" . "<br>";
    }
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
    <form action="form_process.php" method="post">
        <input type="text" placeholder="Enter your name" name="username">
        <input type="password" placeholder="Enter your password" name="password">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>