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
        
        $query = "
            UPDATE users
            SET username='$username', password='$password'
            WHERE id=$id
        ";

        $result = mysqli_query($connection, $query);

        if (!$result) die("There was an error updating the data");
        else echo "The data was updated";
    }   
?>