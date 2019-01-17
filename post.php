<?php
    if (isset($_POST['submit'])){
        echo $_POST['name'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-6 mr-auto ml-auto mt-5">
            <form action="post.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="enter a name">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
            </form>
        </div>
    </div>
</body>
</html>