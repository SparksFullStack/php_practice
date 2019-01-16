<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/

	$connection = mysqli_connect('localhost', 'root', '', '7');
	if (!$connection) die("there was an error connecting to the database");
	
	// $query = "
	// 	INSERT INTO users(username, password)
	// 	VALUES('cheesedick', 'dickcheese')
	// ";
	// $result = mysqli_query($connection, $query);
	// if (!$result) die("there was an error adding data to the database");

	$readQuery = "
		SELECT * FROM users WHERE username='cheesedick'
	";

	$readResult = mysqli_query($connection, $readQuery);
	while($row = mysqli_fetch_assoc($readResult)){
		$newPass = $row['password'];
		echo $newPass;
	};

?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
