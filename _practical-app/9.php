<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		<a href="9.php?test=example">CLICK HERE</a>
	
	<?php 
		// echo $_GET["test"];
	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
		$cookieName = "examplecookie";
		$cookieVal = "some value";
		$cookeExp = time() + (60*60*7*24*2);
		setcookie($cookieName, $cookieVal, $cookeExp);
		echo $_COOKIE['examplecookie'];


		session_start();
		$_SESSION['cheese'] = 'ballz';
		echo $_SESSION['cheese'];
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>