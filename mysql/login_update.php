<?php 
    include "db.php";
    include "functions.php";

    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "
                    UPDATE users SET username='$username', password='$password' 
                    WHERE id=$id
                ";

        $result = mysqli_query($connection, $query);

        if ($result){
            echo "We did it";
        } else echo "fuck";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Read</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <div class="col-sm-6 mr-auto ml-auto mt-5">
            <form action="login_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="form-group">
                    <select name="id" id="">
                        <?php
                            showAllData();
                        ?>
                    </select>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
            </form>
        </div>
    </div>
</body>
</html>