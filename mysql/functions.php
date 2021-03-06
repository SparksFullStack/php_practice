<?php 
    include "db.php";

    function showAllData(){
        global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        if (!$result){
            die("there was an error");
        }

        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            echo "<option value=$id>$id</option>";
        }
    }

    function updateRecord(){
        global $connection;
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $hash = "$2y$10$";
        $salt = "thisisanotherreallylongstring";
        $hash_and_salt = $hash . $salt;

        $password = crypt($password, $hash_and_salt);

        $query = "
            UPDATE users
            SET username='$username', password='$password'
            WHERE id=$id
        ";

        $result = mysqli_query($connection, $query);

        if (!$result) die("There was an error updating the data");
        else echo "The data was updated";
    }   

    function deleteRecord(){
        global $connection;
        $id = $_POST['id'];

        $query = "
            DELETE FROM users WHERE id=$id
        ";

        $result = mysqli_query($connection, $query);

        if (!$result) die("The record could not be deleted");
        else echo "we did it ya'll!";
    }
?>