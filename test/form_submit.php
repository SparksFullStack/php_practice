<?php
    if (isset($_POST["submit"])){
        $username = $_POST["name"];
        $password = $_POST["password"];

        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

        $query = "INSERT INTO users(password, username) VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if ($result){
            echo "Welcome to the restaurant, " . $username . "!" . "<br>";
        } echo "you a lite motha fuck";
    }
?>