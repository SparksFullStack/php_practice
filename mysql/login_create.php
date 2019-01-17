<?php
    include "db.php";

    if (isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $hash = "$2y$10$";
        $salt = "thisisareallyreallylongstring";
        $hash_and_salt = $hash . $salt;

        $password = crypt($password, $hash_and_salt);

        if ($connection) echo "WE LIT";
        else die("we lite =/");

        $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if (!$result){
            die("query failed/we lite again" . mysqli_error());
        }
    }
?>