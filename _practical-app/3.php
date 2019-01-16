<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

	$emotion = "love";

	// if ($emotion === "hate"){
	// 	echo "I hate PHP";
	// }	elseif ($emotion === "love"){
	// 	echo "I love PHP";
	// } else {
	// 	echo "I'm indifferent to PHP";
	// }

	// for ($i = 0; $i <= 10; $i++){
	// 	echo "The current number is " . $i . "<br>";
	// }

		switch($emotion){
			case "love":
				echo "I love PHP";
				break;
			case "hate":
				echo "I hate PHP";
				break;
			default:
				echo "I'm indifferent to PHP";
		}

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>