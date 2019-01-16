
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
	<form action="../form_process.php" method="post">
		<input type="text" name="name" placeholder="Enter your name">
		<input type="password" name="password" placeholder="Enter your password">
		<br>
		<input type="submit" name="submit">
	</form>

	<?php  

	if (isset($_POST['submit'])){
		$username = $_POST['name'];
		$password = $_POST['password'];

		echo "Hello there, " . $username . ", your password is " . $password;
	}

/*  Step1: Make a form that submits one value to POST super global


 */

	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>